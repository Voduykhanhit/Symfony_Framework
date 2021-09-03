<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sesio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sesio\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class UserController extends AbstractController{
    /**
     * @Route("/",name="index")
     *
     */
    public function index(){
        return $this->render(view:'base.html.twig');
    }
    /**
     * @Route("/user/name={name?}",name="user")
     * @Params
     * */
    public function user(Request $rq){
        $name = $rq->get(key:'name');
        return new Response('<h1>'.$name.'</h1>');
    }
    /**@Route("/trangchu",name="home")*/
    public function home(){
        return $this->render(view:'pages/home.html.twig');
    }

}

 ?>