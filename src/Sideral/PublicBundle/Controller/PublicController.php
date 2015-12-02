<?php

namespace Sideral\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicController extends Controller
{
   /**
      * @Route("/")
      * @Template()
     */
    public function IndexAction()
    {
        return array();
    }
	/**
      * @Route("/ressources/{type}",name="sideral_public_public_ressources",
      *defaults={"type"=0})
      * @Template()
     */
    public function ressourcesAction($type)
    {
        if ($type == "population" and $type =="moral" and $type == "nourriture" and $type == "structure" and $type == "carburant" and $type == "materiaux"){
            $this->addFlash('notice', 'Félicitation, tu as trouvé la bonne ressource' );
        }
        

        return array ('type' => $type);
    }
    
}
