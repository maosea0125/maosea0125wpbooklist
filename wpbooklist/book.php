<?php

use Propel\Runtime\Util\PropelModelPager;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Book
{
    public function indexAction($request, $twig){
        $books = WpMaosea0125BookQuery::create();
        $pagination = new PropelModelPager($books, 10);
        $pagination->setPage(1);
        $pagination->init();

        return $twig->display('list.html', array(
            'pagination' => $pagination,
            'message' => $request->getSession()->getFlashBag()->get('message'),
        ));
    }

    public function editAction($request, $twig){
        exit('edit');
    }

    public function deleteAction($request, $twig){
        $book = WpMaosea0125BookQuery::create()->findById($request->query->get('id'));
        if($book){
            $book->delete();
        }

        $flashbag = $request->getSession()->getFlashBag();
        $flashbag->set('message', '删除成功');

        $response = new RedirectResponse('admin.php?page=maosea0125_book');
        return $response->send();
    }
}