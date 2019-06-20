<?php


namespace App\Controller;


use App\Entity\Breeds;
use JMS\Serializer\SerializationContext;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Unirest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;

/**
 * Breeds controller.
 *
 */
class BreedsController extends Controller
{
    /**
     * Consulta raças de gatos
     *
     * Este methodo retorna um array com as raças de gatos encontradas na TheCatAPI.
     *
     * @Route("/breeds", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Retorna os dados da raça ",
     *     @SWG\Schema(
     *         type="array",
     *         @SWG\Items(ref=@Model(type=Breeds::class))
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Bad Request, Quando não informado o parametro name.",
     * )
     * @SWG\Response(
     *     response=204,
     *     description="No Content, Quando a Raça informada, não for localizada.",
     * )
     *
     * @SWG\Parameter(
     *     name="name",
     *     in="query",
     *     type="string",
     *     description="Nome da Raça",
     *     required=true,
     * )
     * @SWG\Tag(name="breeds")
     */
    public function getBreedsAction(Request $request)
    {

        if (is_null($request->get('name'))):
            return $this->_setBaseHeaders(new Response($this->serialize(['msg'=>'parameter not known name']), Response::HTTP_BAD_REQUEST));
        endif;

        $rpBreeds = $this->getDoctrine()->getManager()->getRepository(Breeds::class)->createQueryBuilder('b');
        $rpBreeds->where('b.id like :id');
        $rpBreeds->setParameter('id','%'.$request->get('name').'%');
        $breed = $rpBreeds->getQuery()->getResult();

        if(!$breed):
            $breed = json_encode($this->_getBreedCatApi($request->get('name')));
        else:
            $breed = $this->serialize($breed);
        endif;

        if(empty(json_decode($breed))):
            return $this->_setBaseHeaders(new Response('', Response::HTTP_NO_CONTENT));
        endif;

        $response = new Response($breed, Response::HTTP_OK);
        return $this->_setBaseHeaders($response);
    }

    /**
     * @param String $name
     * @return JSON data
     */
    private function _getBreedCatApi(String $name)
    {
        $headers = array('x-api-key' => 'DEMO-API-KEY');
        $query = array('q' => $name);
        $response = Unirest\Request::get('https://api.thecatapi.com/v1/breeds/search/',$headers,$query);
        if(count($response->body) == 1):
            $data=json_encode($response->body[0]);
            $this->_safeCache(json_decode($data));
            return ($response->body[0]);
        endif;
        return ($response->body);

    }

    /**
     * Set base HTTP headers.
     * @author George Freitas <gutofreitas.freitas@gmail.com>
     * @param Response $response
     * @return Response
     */
    private function _setBaseHeaders(Response $response)
    {
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    /**
     * Data serializing via JMS serializer.
     * @author George Freitas <gutofreitas.freitas@gmail.com>
     * @param mixed $data
     * @return string JSON string
     */
    public function serialize($data)
    {
        $context = new SerializationContext();
        $context->setSerializeNull(false);
        return $this->get('jms_serializer')
            ->serialize($data, 'json', $context);
    }


    /**
     * Salva o cache da consulta na base de dados
     * @author George Freitas <gutofreitas.freitas@gmail.com>
     * @param mixed $data
     * @return boolean
     */
    private function _safeCache($data)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $breed = new Breeds();
        $breed->setId($data->id);
        $breed->setName($data->name);
        $breed->setTemperament($data->temperament);
        $breed->setLifeSpan($data->life_span);
        $breed->setAltNames($data->alt_names);
        $breed->setWikipediaUrl($data->wikipedia_url);
        $breed->setOrigin($data->origin);
        $breed->setWeight($data->weight);
        $breed->setExperimental($data->experimental);
        $breed->setHairless($data->hairless);
        $breed->setNaturalColum($data->natural);
        $breed->setRare($data->rare);
        $breed->setRex($data->rex);
        $breed->setSupperessTail($data->suppressed_tail);
        $breed->setShortLegs($data->short_legs);
        $breed->setHypoallergenic($data->hypoallergenic);
        $breed->setAdaptability($data->adaptability);
        $breed->setAffectionLevel($data->affection_level);
        $breed->setCountryCode($data->country_codes);
        $breed->setChildFriendly($data->child_friendly);
        $breed->setEnergyLevel($data->energy_level);
        $breed->setGrooming($data->grooming);
        $breed->setHealthIssues($data->health_issues);
        $breed->setIntelligence($data->intelligence);
        $breed->setSheddingLevel($data->shedding_level);
        $breed->setSocialNeeds($data->social_needs);
        $breed->setStrangerFriendly($data->stranger_friendly);
        $breed->setVocalisation($data->vocalisation);
        $breed->setCfaUrl($data->cfa_url);
        $breed->setVetstreetUrl($data->vetstreet_url);
        $breed->setVcahospitalsUrl($data->vcahospitals_url);
        $breed->setIndoor($data->indoor);
        $breed->setLap($data->lap);
        $breed->setCountryCodes($data->country_codes);
        $breed->setDescription($data->description);
        $entityManager->persist($breed);
        $entityManager->flush();
        return true;
    }

}