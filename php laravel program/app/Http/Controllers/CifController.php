<?php

namespace App\Http\Controllers;

use App\Models\CifModel;
use App\Models\CifPersonalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CifController extends Controller
{
    public function getData(){
        $data = CifModel::join('mst_cifpersnl', 'mst_cif.cifid', 'mst_cifpersnl.cifid')
                    ->get(['mst_cif.fullnm', 'mst_cif.cifid', 'mst_cif.aoid', 'mst_cifpersnl.sex']);

        return view('index', ['data' => $data]);
    }

    public function showAddForm(){
        return view('addForm');
    }

    public function store(Request $request){

        $cif = new CifModel;
        $cifpersnl = new CifPersonalModel;
        
        $cifid = random_int(pow(10, 9), pow(10, 10) - 1);

        $cif->cifid = $cifid;
        $cif->aoid = $request->aoid;
        $cif->dtjoin = $request->dtjoin;
        $cif->fullnm = $request->fullnm;
        $cif->npwp = $request->npwp;
        $cif->countryid = $request->countryid;

        $cif->save();

        $cifpersnl->cifid = $cifid;
        $cifpersnl->aoid = $request->aoid;
        $cifpersnl->fullnm = $request->fullnm;
        $cifpersnl->surenm = $request->surenm;
        $cifpersnl->alias = $request->alias;
        $cifpersnl->mothrnm = $request->mothrnm;
        $cifpersnl->sex = $request->sex;
        $cifpersnl->brtplace = $request->brtplace;
        $cifpersnl->brtdt = $request->brtdt;
        $cifpersnl->ownid = $request->ownid;
        $cifpersnl->nip = $request->nip;
        $cifpersnl->expdt = $request->expdt;
        $cifpersnl->addr = $request->addr;
        $cifpersnl->rt = $request->rt;
        $cifpersnl->rw = $request->rw;
        $cifpersnl->kelnm = $request->kelnm;
        $cifpersnl->provid = $request->provid;
        $cifpersnl->countryid = $request->countryid;
        $cifpersnl->postalcode = $request->postalcode;
        $cifpersnl->kecnm = $request->kecnm;
        $cifpersnl->cityid = $request->cityid;
        $cifpersnl->npwp = $request->npwp;
        $cifpersnl->nohp = $request->nohp;
        $cifpersnl->note = $request->note;

        $cifpersnl->save();

        return redirect('/');

    }

    public function showEditForm($cifid){
        $data = CifModel::join('mst_cifpersnl', 'mst_cif.cifid', 'mst_cifpersnl.cifid')
                    ->where('mst_cif.cifid', $cifid)
                    ->get(['mst_cif.cifid',
                            'mst_cif.aoid',
                            'mst_cif.dtjoin',
                            'mst_cif.fullnm',
                            'mst_cif.npwp',
                            'mst_cif.countryid',
                            'mst_cifpersnl.cifid',
                            'mst_cifpersnl.aoid',
                            'mst_cifpersnl.fullnm',
                            'mst_cifpersnl.surenm',
                            'mst_cifpersnl.mothrnm',
                            'mst_cifpersnl.npwp',
                            'mst_cifpersnl.brtdt',
                            'mst_cifpersnl.brtplace',
                            'mst_cifpersnl.typeid',
                            'mst_cifpersnl.addr',
                            'mst_cifpersnl.rt',
                            'mst_cifpersnl.rw',
                            'mst_cifpersnl.kelnm',
                            'mst_cifpersnl.postalcode',
                            'mst_cifpersnl.kecnm',
                            'mst_cifpersnl.cityid',
                            'mst_cifpersnl.provid',
                            'mst_cifpersnl.countryid',
                            'mst_cifpersnl.expdt',
                            'mst_cifpersnl.sex',
                            'mst_cifpersnl.nohp',
                            'mst_cifpersnl.homeid',
                            'mst_cifpersnl.ownid',
                            'mst_cifpersnl.alias',
                            'mst_cifpersnl.note',
                            'mst_cifpersnl.nip',
                        ]);

        return view('editForm',['data' => $data]);
    }

    public function edit(Request $request){

        $cifId = $request->cifid;

    // Update CifModel
    \DB::table('mst_cif')
        ->where('cifid', $cifId)
        ->update([
            'AOID' => $request->aoid,
            'dtjoin' => $request->dtjoin,
            'FULLNM' => $request->fullnm,
            'NPWP' => $request->npwp,
            'COUNTRYID' => $request->countryid,
        ]);

    // Update CifPersonalModel
    \DB::table('mst_cifpersnl')
        ->where('cifid', $cifId)
        ->update([
            'AOID' => $request->aoid,
            'FULLNM' => $request->fullnm,
            'SURENM' => $request->surenm,
            'ALIAS' => $request->alias,
            'MOTHRNM' => $request->mothrnm,
            'SEX' => $request->sex,
            'BRTPLACE' => $request->brtplace,
            'BRTDT' => $request->brtdt,
            'OWNID' => $request->ownid,
            'NIP' => $request->nip,
            'EXPDT' => $request->expdt,
            'ADDR' => $request->addr,
            'RT' => $request->rt,
            'RW' => $request->rw,
            'KELNM' => $request->kelnm,
            'PROVID' => $request->provid,
            'COUNTRYID' => $request->countryid,
            'POSTALCODE' => $request->postalcode,
            'KECNM' => $request->kecnm,
            'CITYID' => $request->cityid,
            'NPWP' => $request->npwp,
            'NOHP' => $request->nohp,
            'NOTE' => $request->note,
        ]);

        return redirect('/');

    }

    public function delete($cifid){
        CifModel::where('cifid', $cifid)->delete();
        CifPersonalModel::where('cifid', $cifid)->delete();

        return redirect('/');
    }
}
