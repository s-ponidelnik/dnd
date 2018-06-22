<?php

namespace App\Rest\Controller;

use App\Rest\Exception\RestException;
use App\Rest\Response\RestErrorResponse;
use App\Rest\Response\RestResponseBuilder;
use FOS\RestBundle\View\ViewHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class RestExceptionController
{
    /**
     * @var ViewHandlerInterface
     */
    private $viewHandler;

    /** @var RestResponseBuilder */
    private $restResponseBuilder;

    public function __construct(ViewHandlerInterface $viewHandler, RestResponseBuilder $restResponseBuilder)
    {
        $this->viewHandler = $viewHandler;
        $this->restResponseBuilder = $restResponseBuilder;
    }

    public function showAction(Request $request, \Throwable $exception): Response
    {
        $this->getAndCleanOutputBuffering((int)$request->headers->get('X-Php-Ob-Level', -1));

        $statusCode = $this->getStatusCode($exception);
        $restErrorCode = $this->getRestErrorCode($exception);
        $restErrorDetails = $this->getMessage($exception);
        $errors[$restErrorCode] = $restErrorDetails;
//        $restProviderError = new RestProviderError();
//        $restProviderError->setCode($restErrorCode);
//        $restProviderError->setDetails($restErrorDetails);

        $restResponse = new RestErrorResponse();
//        $restResponse->addProviderError($restProviderError);

        $view = $this->restResponseBuilder->build($restResponse, $statusCode, $this->getHeaders($exception));

        return $this->viewHandler->handle($view);
    }

    private function getAndCleanOutputBuffering(int $startObLevel): string
    {
        if (ob_get_level() <= $startObLevel) {
            return '';
        }
        Response::closeOutputBuffers((int)($startObLevel + 1), true);

        return ob_get_clean();
    }

    private function getStatusCode(\Throwable $exception): int
    {
        if ($exception instanceof RestException) {
            return $exception->getCode();
        }
        if ($exception instanceof HttpExceptionInterface) {
            return $exception->getStatusCode();
        }

        return RestException::STATUS_CODE;
    }

    private function getRestErrorCode(\Throwable $exception): string
    {
        if ($exception instanceof RestException) {
            return $exception->getRestCode();
        }

//        return RestException::REST_CODE;
        return 'Error';
    }

    private function getMessage(\Throwable $exception): string
    {
        if ($exception instanceof RestException) {
            return $exception->getMessage();
        }
        if ($exception instanceof HttpExceptionInterface) {
            $code = $exception->getStatusCode();
            if (array_key_exists($code, Response::$statusTexts)) {
                return Response::$statusTexts[$code];
            }
        }

        return RestException::MESSAGE;
    }

    private function getHeaders(\Throwable $exception): array
    {
        if ($exception instanceof HttpExceptionInterface) {
            return $exception->getHeaders();
        }

        return [];
    }
}