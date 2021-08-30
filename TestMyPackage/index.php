<?php

   require __DIR__.'/vendor/autoload.php';	

   $mygenerator = new \Generator\TextGenerator();
   echo $mygenerator->generate(100);