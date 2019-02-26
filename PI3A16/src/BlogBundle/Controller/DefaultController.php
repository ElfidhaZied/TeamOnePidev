<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function blogAction()
    {
<<<<<<< HEAD
        return $this->render('@Blog\Default\blog.html.twig');
=======
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('BlogBundle:Categorie')->findAll();

        return $this->render('@Blog/Default/blog.html.twig', array(
            'categories' => $categories,
        ));

>>>>>>> upstream/Hosni
    }
}
