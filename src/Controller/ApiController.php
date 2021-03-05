namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\TbldatCompanies;

/**
* Class ApiController
* @package App\Controller
*/
class ApiController extends AbstractController
{
    /**
    * * @Route(path="/api/companies", methods={"GET"})
    * @return mixed
    */
    public function companyList()
    {
        $repository = $this->getDoctrine()->getRepository(TbldatCompanies::class);
        $companies = $repository->findAll();
        $this->render(new JsonResponse($companies));
    }
}