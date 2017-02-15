<?php

use Propel\Runtime\Util\PropelModelPager;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Book
{
    public function indexAction($request, $twig){
        $books = WpMaosea0125BookQuery::create();
        $pagination = new PropelModelPager($books, 1);
        $currentPager = $request->query->get('pager') ? intval($request->query->get('pager')) : 1;
        $pagination->setPage($currentPager);
        $pagination->init();
// var_dump(get_class_methods($pagination), $pagination->getPreviousPage());exit;
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