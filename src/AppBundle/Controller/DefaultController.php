<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("lucky/number")
     * @return int
     * Generate  number between 1 and 100
     * @throws \ExcepStion
     * @throws \ExcepStion
     */
  public function luckyNumber()
  {
      $var =  random_int(0,100);
      return new Response('<html><body>'.$var.'</body></html>');
  }
}
