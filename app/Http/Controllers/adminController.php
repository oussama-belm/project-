<?php


namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
class adminController extends Controller
{

    public function login(){
        return view('admin.login');
    }
    public $request;

    public function adlogin(request $request){

        $username = $request['username'];
        $password = $request['password'];

        $admin = FacadesDB::table('admins')->where('username',$username)->where('password',$password)->get();
        $products = FacadesDB::select('select * from produits');
        $vendeurs = FacadesDB::select('select * from vendeurs');
        $users = FacadesDB::select('select * from users');
        $dommande_compte_vendeurs = FacadesDB::select('select * from dommander_compte_vendeurs');
        $problems = FacadesDB::select('select * from problems');
        $evenements = FacadesDB::select('select * from evenements');

        if( count($admin) > 0 ){

            return view('admin.profile',[
                'admin'=>$admin[0],
                'products'=>$products,
                'vendeurs'=>$vendeurs,
                'users'=>$users,
                'dommander_compte_vendeurs'=>$dommande_compte_vendeurs,
                'problems'=>$problems,
                'evenements'=>$evenements,
            ]);
        }else{
            return redirect('admin/login');
        }
    }


    public function refresh($aid,$uid ,request $request){
        FacadesDB::table('users')->where('id',$uid)->delete();
        return $this->adlogin($request);
    }

    public function delete($id){
        FacadesDB::table('dommander_compte_vendeurs')->where('id',$id)->delete();
        return back();
    }

    public function accepter($id){
        $username = request('username');
        $password = request('password');
        $vdommander = FacadesDB::table('dommander_compte_vendeurs')->where('id',$id)->get();
        FacadesDB::insert('insert into vendeurs(username,password,nom,prenom,num_telephone,typearticle,num_boutique) values (?,?,?,?,?,?,?)', [$username,$password,$vdommander[0]->nom,$vdommander[0]->prenom,$vdommander[0]->num_telephone,$vdommander[0]->typearticle,$vdommander[0]->num_boutique]);
        FacadesDB::table('dommander_compte_vendeurs')->where('id',$id)->delete();
        return back();
    }
    public function ajouter($id){
        FacadesDB::insert('insert into evenements (admin_id, date_debut,date_fin,description) values (?, ?,?,?)', [$id,request('debut'),request('fin'),request('description')]);
        return back();
    }
}
