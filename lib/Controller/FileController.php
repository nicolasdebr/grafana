<?php
 namespace OCA\grafana\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Controller;
 use OCP\AppFramework\Http\DataResponse;
 use OCP\AppFramework\Http;
 use OCA\MyApp\Db\File;

 class FileController extends Controller {

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
         $file = new File();
         $file->setTitle($title);   
         $file->setContent($content);
         $file->setUserId($userId);
         return $file;
     }

    

 }
