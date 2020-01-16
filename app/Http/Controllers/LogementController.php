<?php
/**
 * Created by PhpStorm.
 * User: familianeil
 * Date: 12/27/19
 * Time: 22:27
 */

namespace App\Http\Controllers;

use App\Departement;
use App\Quartier;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*   public function __construct()
       {
           $this->middleware('auth');
       }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depart = Departement::all();
        // var_dump($depart);
        return view('logement/index')->with('fulldep', $depart);
    }

    public function test()
    {
        // var_dump($depart);
        return view('logement/testlumia1');
    }

    public function fetch(Request $request)
    {

        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::select('select * from quartiers where id_dep = :id', ['id' => $value]);

        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nom . '</option>';
        }
        echo $output;
    }

    public function list(Request $request)
    {

        if ($request->get('quartier') != session('id') and $request->get('quartier') != null) {
            session(['id' => $request->get('quartier')]);
        }
        //$data = DB::select('select *  from logements where id_quartier = ?', [$request->get('quartier')]);
        $data = DB::table('logements')->where('id_quartier', '=', session('id'))->paginate(3);
        // $data;
        //   return view('logement/listlogement',['test'=>$data])->with('result',$data);
        //   var_dump(session('id'));
        return view('logement/listlogement', ['data' => $data]);
    }

    public function addLogement()
    {

    }

    public function logView(Request $request)
    {

        $datas = DB::table('logements')->where('reference', '=', $request->get('sel'))->get();
        foreach ($datas as $dt) {
            //var_dump($dt->designation);
            $d = $dt;
        }
        $data = DB::table('appartements')->where('reference_logement', '=', $d->reference)->get();

        //var_dump($datas->get());

        // var_dump($d);
        return view('logement/gestionlogement', ['log' => $d, 'app' => $data]);

    }

    public function logApp(Request $request)
    {
        if ($request->get('witch') != session('id_app') and $request->get('witch') != null) {
            session(['id_app' => $request->get('witch')]);
        }

        $data = DB::table('appartements')->where('id', '=', session('id_app'))->get();

        foreach ($data as $dt) {
            //var_dump($dt->designation);
            $d = $dt;
        }

        $datas = DB::table('logements')->where('reference', '=', $d->reference_logement)->get();

        foreach ($datas as $dts) {
            //var_dump($dt->designation);
            $ds = $dts;
        }
        $days = DB::table('days')->get();
        foreach ($days as $dtd) {
            //var_dump($dt->designation);
            $day = $dtd;
        }
        $wday = DB::table('workhours')->where('appart_id', '=', $d->id)->get();


        $joinday = DB::table('workhours')->join('days', 'day_id', '=', 'days.id')->where('appart_id', '=', $d->id)->get();
        /*   foreach($wday as $w)
           {
               //var_dump($dt->designation);
               $h=$w;
           }*/
        $index = 1;
        $this->recup($joinday);
        session(['check' => $joinday]);
        //App appartement selectionnee
        //log le logement concernee
        //day
        return view('logement.reserver_logement', ['app' => $d, 'log' => $ds, 'days' => $day, 'index' => $index, 'wh' => $wday, 'appdays' => $joinday]);

    }

    public function recup($r)
    {

    }

    public function uplLog(Request $request)
    {

        //On doit  maintenant mettre a jour
        // la table des reservation des appartement
        //client
        //chambre
        //id_workhours

        //  $valid= DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);

        /* +"id": 2
      +"created_at": null
      +"updated_at": null
      +"appart_id": 2
      +"day_id": 2
      +"start_time": "10:10"
      +"end_time": "12:30"
      +"name": "Mardi"
        */
        $all = session('check');
        $id_choix = $request->choix;
        foreach ($all as $item) {
            if ($id_choix == $item->day_id) {
                $choixeffctif = $item;
            }
        }

        //   return var_dump(Auth::getSession());
        //  return dd();
        //return dump($ok);
        DB::insert('insert into reserver_appartements (id_client,id_app,id_workhours,statut) values (?,?,?,?)', [Auth::user()->id, $choixeffctif->appart_id, $choixeffctif->id_workhours, 'test']);
        $affichprofil = $this->profilReservation();

        return view('logement.profil_reservation',['data'=>$affichprofil]);

    }


    public function profilReservation()
    {
        $d = DB::table('reserver_appartements')->where('id_client', '=', Auth::user()->id)->get();

        return $d;
        //return view('logement.profil_reservation');
    }

    public function profilc()
    {
        return view('logement.profil');
    }

    public function destroy(){

    }

    public function update(){

    }
    public function show(){

    }
}
