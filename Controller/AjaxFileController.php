<?php

namespace Shtumi\UsefulBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxFileController extends AbstractController
{

    public function uploadAction(Request $request)
    {
        $filesBag = $request->files->all();

        $files = array();
        $filesResult = array();
        //foreach ($filesBag as $form){
            foreach ($filesBag as $file){
                $files []= $file;
                $filesResult []=  array(
                    'path' => $file->getPathname(),
                    'url'  => 'ddd'
                );
            }
        //}

        $filesResult ['length'] = count($files);

        return new Response(json_encode(array(
            'result' => array(
                'files' => $filesResult
            )
        )));
    }
}
