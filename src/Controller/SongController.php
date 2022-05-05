<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HTTPFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
class SongController extends AbstractController
{

 #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]   
public function getSong(int $id, LoggerInterface $logger): Response
{
   $song = [
    'id' => $id,
    'name' => 'Waterfalls',
    'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',


   ];
   $logger->info('Returning API response for song {song}'.$id, [
      'song' => $id,
   ]);
   return $this->json($song);
} 

    
}