<?php
 namespace OCA\grafana\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Controller;
 use OCP\AppFramework\Http\DataResponse;
 use OCP\AppFramework\Http;

 class NoteController extends Controller {

     public function __construct(string $AppName, IRequest $request){
         parent::__construct($AppName, $request);
     }

     /**
      * @NoAdminRequired
      */


     /**
      * @NoAdminRequired
      *
      * @param string $title
      * @param string $content
      */
     public function create(string $title, string $content) {
         return "Service ! " . $tittle . $content . $userId;
     }

    

 }
