<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index()
    {
        // $data['list_agenda'] = Agenda::all();
        return view('mahasiswa.index',); //$data);
    }
    function create()
    {
        return view('admin.agenda.create_agenda');
    }

    function store()
    {
        // $agenda = new agenda;
        // $agenda->nama_agenda = request('nama_agenda');
        // $agenda->foto = request('foto');
        // $agenda->tanggal_mulai = request('tanggal_mulai');
        // $agenda->tanggal_selesai = request('tanggal_selesai');
        // $agenda->keterangan = request('keterangan');
        // $agenda->save();
        return view('admin.agenda.create_agenda');
    }

    function show()
    {
        //$data['agenda'] = Agenda::find($agenda);
        //return view('admin.agenda.show_agenda');
    }

    function edit()
    {
    }
    function update()
    {
    }

    function destroy()
    {
    }
}
