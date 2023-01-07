@extends('layout.masterBO')

@section('title', 'MoveArt - Modalidades Editar')

@section('links')
<link rel="stylesheet" href="{{ asset('css/modalidades_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main')
<div class="dashboard_main">
    <div class="mod_create_main">
        <h1>
        <i class="fa-solid fa-pen-ruler"></i>Editar Modalidade
        </h1>
        <form action="">
            <div class="first">
                <div class="primeira_info">
                    <legend><i class="fa-solid fa-circle-info"></i> Primeira Informação</legend>
                    <div class="row">
                        <div class="col">
                            <div class="title_nome">Nome da Modalidade</div>
                            <input type="text" class="form-control nome_mod" name="nome" id="">
                            <div class="title_desc">Breve descrição da Modalidade</div>
                            <textarea name="" class="form-control desc_mod" id=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="valores">
                    <legend><i class="fa-solid fa-euro-sign"></i> Valores</legend>
                    <div class="row">
                        <div class="col">
                            <div class="title_vm">Valor Mensal</div>
                            <input type="number" class="form-control vm" name="" id="">
                            <div class="title_va">Valor Anual</div>
                            <input type="number" class="form-control va" name="" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="imagens">
                <legend><i class="fa-solid fa-photo-film"></i> Imagens</legend>
                <div class="imgs">
                    <div class="first_imgs">
                        <div class="title_fm">Foto modalidade</div>
                        <label for="fm"><i class="fa fa-plus"></i></label>
                        <input type="file" class="upload_img" name="" id="fm" accept=".jpg, .jpeg, .png">
                        <div class="title_fh">Foto do horário</div>
                        <label for="fh"><i class="fa fa-plus"></i></label>
                        <input type="file" class="upload_img" name="" id="fh" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="second_imgs">
                        <div class="title_fmm">Foto modalidade Mensal</div>
                        <label for="fmm"><i class="fa fa-plus"></i></label>
                        <input type="file" class="upload_img" name="" id="fmm" accept=".jpg, .jpeg, .png">
                        <div class="title_fma">Foto modalidade Anual</div>
                        <label for="fma"><i class="fa fa-plus"></i></label>
                        <input type="file" class="upload_img" name="" id="fma" accept=".jpg, .jpeg, .png">
                    </div>
                </div>


            </div>

        </form>
    </div>
</div>
@endsection