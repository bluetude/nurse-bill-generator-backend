<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PdfController
{
    #[Route(path: '/generate-pdf', name: 'app_generate_pdf', methods: ['POST'])]
    public function generatePdfAction(Request $request): Response
    {
        dd($request);
    }

}