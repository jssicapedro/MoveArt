@extends('layout.masterBO')


@section('title', 'Utilizadores')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/users_back.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
@endsection

@section('script')

@endsection

@section('main')
<div id="user_main_content">
    <div class="container " style="height: auto">
        <div id="area" style="padding:100px 100px 50px 100px;">
            <div class="head_area">
                <div class="row">
                    <div class="col-6 head_title">
                        <h2>
                            Utilizadores
                        </h2>

                    </div>
                    <div class="col-6">
                        <div class="buttons d-flex justify-content-end">
                            <div id="add">
                                <button type="button" class="btn add">+ Adicionar</button>
                            </div>
                            <div id="load">
                                <button onClick="window.location.reload();" type="button"
                                    class="btn load">Atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div {{-- class="d-flex justify-content-center align-items-center" --}}>


                <div id="accordion">
                    <div style="padding:50px 0; ">
                        <div class="table-responsive rr">

                            <table class="table align-middle" style="margin: 0;">
                                <thead style="padding:100px 0; ">
                                    <tr class="bottom_tr id-pad">
                                        <th class="pad" scope="col">ID</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nascimento</th>
                                        <th scope="col">Género</th>
                                        <th scope="col">Função</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>

                                @if (count($users))
                                    @foreach ($users as $user)
                                        <tbody id="yy">


                                            <tr class="id-pad">
                                                <td class="align-middle pad">{{ $user->id }}</td>
                                                <td class="align-middle">
                                                    <div id="user_photo">
                                                        @if ($user->foto == null)
                                                            <img src="{{ asset('img/inicio/user.jpg') }}" alt="user">
                                                        @else
                                                            <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                                alt="user">
                                                        @endif
                                                    </div>

                                                </td>
                                                <td class="align-middle">{{ $user->primeiro }} {{ $user->apelido }}</td>
                                                <td class="align-middle">{{ $user->email }}</td>
                                                <td class="align-middle">{{ $user->data_nasc }}</td>
                                                <td class="align-middle">{{ $user->genero }}</td>
                                                <td class="align-middle">{{ $user->perfil }}</td>
                                                <td class="align-middle icon_btns">

                                                    <button class="btn viewbtn collapsed" data-toggle="collapse"
                                                        data-target="#view{{ $user->id }}" aria-expanded="false"
                                                        aria-controls="collapseThree"><i
                                                            class="fa-solid fa-eye"></i></button>

                                                    <button class="btn editbtn collapsed" data-toggle="collapse"
                                                        data-target="#edit{{ $user->id }}" aria-expanded="false"
                                                        aria-controls="collapseThree"><i
                                                            class="fa-solid fa-pencil"></i></button>

                                                    <button data-bs-toggle="modal"
                                                        data-bs-target="#deletemodal{{ $user->id }}"
                                                        class="btn deletebtn"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="8" style="border-bottom-right-radius: 15px;"
                                                    class="hiddenRow">
                                                    <div id="view{{ $user->id }}" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="container">
                                                            <div id="expand_user">
                                                                <div class="row">
                                                                    <div class="col-3 nas">
                                                                        <div id="view_user_photo">
                                                                            @if ($user->foto == null)
                                                                                <img src="{{ asset('img/inicio/user.jpg') }}"
                                                                                    alt="user">
                                                                            @else
                                                                                <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                                                    alt="user">
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-3 nas">
                                                                        <div class="user_name">
                                                                            <h2>{{ $user->primeiro }}
                                                                                {{ $user->apelido }}
                                                                            </h2>
                                                                        </div>
                                                                        <div class="user_list">
                                                                            <ul>
                                                                                <li><span>Nascimento:
                                                                                    </span>{{ $user->data_nasc }}</li>
                                                                                <li><span>Género:
                                                                                    </span>{{ $user->genero }}
                                                                                </li>

                                                                                <li><span>Telefone:
                                                                                    </span>
                                                                                    @if ($user->telefone == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->telefone }}
                                                                                    @endif
                                                                                </li>

                                                                                <li><span>Email:
                                                                                    </span>{{ $user->email }}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 nas">
                                                                        <div class="user_list" style="padding-top: 46px">
                                                                            <ul>
                                                                                <li><span>CC: </span>
                                                                                    @if ($user->cc == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->cc }}
                                                                                    @endif
                                                                                </li>
                                                                                <li><span>Nif: </span>
                                                                                    @if ($user->nif == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->nif }}
                                                                                    @endif
                                                                                </li>
                                                                                <li><span>Localidade:
                                                                                    </span>
                                                                                    @if ($user->localidade == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->localidade }}
                                                                                    @endif
                                                                                </li>
                                                                                <li><span>Rua: </span>
                                                                                    @if ($user->rua == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->rua }}
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-3 nas">
                                                                        <div class="user_list" style="padding-top: 46px">
                                                                            <ul>
                                                                                <li><span>Código-Postal:
                                                                                    </span>
                                                                                    @if ($user->cod_postal == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->cod_postal }}
                                                                                    @endif
                                                                                </li>
                                                                                <li><span>Perfil:
                                                                                    </span>{{ $user->perfil }}
                                                                                </li>
                                                                                <li><span>Modalidade:
                                                                                    </span>
                                                                                    @if ($user->modalidade == null)
                                                                                        ---
                                                                                    @else
                                                                                        {{ $user->modalidade }}
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>



                                            <tr>

                                                <td colspan="8" class="hiddenRow">
                                                    <div id="edit{{ $user->id }}" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="container">
                                                            <div id="expand_user">
                                                                <form class="form_label">
                                                                    <div class="row">
                                                                        <div class="col-3 d-flex align-items-center">
                                                                            <div id="view_user_photo">

                                                                                <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                                                    alt="user">


                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="mb-2">
                                                                                <label for="nameedit"
                                                                                    class=" col-form-label col-form-label-sm">Nome:
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="nameedit"
                                                                                    aria-describedby="emailHelp"
                                                                                    value="{{ $user->primeiro }} {{ $user->apelido }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="ageedit"
                                                                                    class=" col-form-label col-form-label-sm">Data
                                                                                    de Nascimento: </label>
                                                                                <input type="date"
                                                                                    class="form-control form-control-sm"
                                                                                    id="ageedit"
                                                                                    value="{{ $user->data_nasc }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="genero"
                                                                                    class=" col-form-label col-form-label-sm">Género:
                                                                                </label>
                                                                                <select id="genero"
                                                                                    class="form-select form-select-sm"
                                                                                    aria-label="Default select example">
                                                                                    @if ($user->genero == 'feminino')
                                                                                        <option selected value="feminino">
                                                                                            Feminino</option>
                                                                                        <option value="masculino">Masculino
                                                                                        </option>
                                                                                        <option value="outro">Outro
                                                                                        </option>
                                                                                        <option value="nao_divulgar">
                                                                                            Prefiro não divulgar</option>
                                                                                    @elseif($user->genero == 'masculino')
                                                                                        <option selected value="feminino">
                                                                                            Feminino</option>
                                                                                        <option selected value="masculino">
                                                                                            Masculino
                                                                                        </option>
                                                                                        <option value="outro">Outro
                                                                                        </option>
                                                                                        <option value="nao_divulgar">
                                                                                            Prefiro não divulgar</option>
                                                                                    @elseif($user->genero == 'outro')
                                                                                        <option value="feminino">
                                                                                            Feminino</option>
                                                                                        <option value="masculino">Masculino
                                                                                        </option>
                                                                                        <option selected value="outro">
                                                                                            Outro
                                                                                        </option>
                                                                                        <option value="nao_divulgar">
                                                                                            Prefiro não divulgar</option>
                                                                                    @elseif($user->genero == 'nao_divulgar')
                                                                                        <option value="feminino">
                                                                                            Feminino</option>
                                                                                        <option value="masculino">Masculino
                                                                                        </option>
                                                                                        <option value="outro">Outro
                                                                                        </option>
                                                                                        <option selected
                                                                                            value="nao_divulgar">
                                                                                            Prefiro não divulgar</option>
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-2">
                                                                                <label for="telemoveledit"
                                                                                    class=" col-form-label col-form-label-sm">Telefone:
                                                                                </label>
                                                                                <input type="tel"
                                                                                    class="form-control form-control-sm"
                                                                                    id="telemoveledit"
                                                                                    value="{{ $user->telefone }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="mb-2">
                                                                                <label for="emailedit"
                                                                                    class=" col-form-label col-form-label-sm">Email:
                                                                                </label>
                                                                                <input type="email"
                                                                                    class="form-control form-control-sm"
                                                                                    id="emailedit"
                                                                                    value="{{ $user->email }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="ccledit"
                                                                                    class=" col-form-label col-form-label-sm">CC:
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="ccedit"
                                                                                    value="{{ $user->cc }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="nifledit"
                                                                                    class=" col-form-label col-form-label-sm">Nif:
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="nifedit"
                                                                                    value="{{ $user->nif }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="localledit"
                                                                                    class=" col-form-label col-form-label-sm">Localidade:
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="localedit"
                                                                                    value="{{ $user->localidade }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="mb-2">
                                                                                <label for="rualedit"
                                                                                    class=" col-form-label col-form-label-sm">Rua:
                                                                                </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="ruaedit"
                                                                                    value="{{ $user->rua }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="postalledit"
                                                                                    class=" col-form-label col-form-label-sm">Código
                                                                                    Postal: </label>
                                                                                <input type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    id="postaledit"
                                                                                    value="{{ $user->cod_postal }}">
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="perfilledit"
                                                                                    class=" col-form-label col-form-label-sm">Perfil:
                                                                                </label>
                                                                                <select id="perfiledit"
                                                                                    class="form-select form-select-sm">
                                                                                    @if ($user->perfil == 'aluno')
                                                                                        <option selected value="aluno">
                                                                                            Aluno</option>
                                                                                        <option value="admin">Admin
                                                                                        </option>
                                                                                        <option value="professor">Professor
                                                                                        </option>
                                                                                    @elseif($user->perfil == 'admin')
                                                                                        <option value="aluno">Aluno
                                                                                        </option>
                                                                                        <option selected value="admin">
                                                                                            Admin</option>
                                                                                        <option value="professor">Professor
                                                                                        </option>
                                                                                    @elseif($user->perfil == 'professor')
                                                                                        <option value="aluno">Aluno
                                                                                        </option>
                                                                                        <option value="admin">Admin
                                                                                        </option>
                                                                                        <option selected value="professor">
                                                                                            Professor
                                                                                        </option>
                                                                                    @endif

                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-2">
                                                                                <label for="modalidadeledit"
                                                                                    class=" col-form-label col-form-label-sm">Modalidade:
                                                                                </label>
                                                                                <select id="modalidadeedit"
                                                                                    class="form-select form-select-sm">

                                                                                    @if ($user->modalidade == 'Ballet')
                                                                                        <option selected value="Ballet">
                                                                                            Ballet</option>
                                                                                        <option value="Hip-Hop">Hip-Hop
                                                                                        </option>
                                                                                        <option value="Dança Espanhola">
                                                                                            Dança
                                                                                            Espanhola</option>
                                                                                        <option value="Danças Orientais">
                                                                                            Danças
                                                                                            Orientais</option>
                                                                                        <option value="Folclore">Folclore
                                                                                        </option>
                                                                                    @elseif($user->modalidade == 'Hip-Hop')
                                                                                        <option value="Ballet">Ballet
                                                                                        </option>
                                                                                        <option selected value="Hip-Hop">
                                                                                            Hip-Hop
                                                                                        </option>
                                                                                        <option value="Dança Espanhola">
                                                                                            Dança
                                                                                            Espanhola</option>
                                                                                        <option value="Danças Orientais">
                                                                                            Danças
                                                                                            Orientais</option>
                                                                                        <option value="Folclore">Folclore
                                                                                        </option>
                                                                                    @elseif($user->modalidade == 'Dança Espanhola')
                                                                                        <option value="Ballet">Ballet
                                                                                        </option>
                                                                                        <option value="Hip-Hop">Hip-Hop
                                                                                        </option>
                                                                                        <option selected
                                                                                            value="Dança Espanhola">Dança
                                                                                            Espanhola</option>
                                                                                        <option value="Danças Orientais">
                                                                                            Danças
                                                                                            Orientais</option>
                                                                                        <option value="Folclore">Folclore
                                                                                        </option>
                                                                                    @elseif($user->modalidade == 'Danças Orientais')
                                                                                        <option value="Ballet">Ballet
                                                                                        </option>
                                                                                        <option value="Hip-Hop">Hip-Hop
                                                                                        </option>
                                                                                        <option value="Dança Espanhola">
                                                                                            Dança
                                                                                            Espanhola</option>
                                                                                        <option selected
                                                                                            value="Danças Orientais">Danças
                                                                                            Orientais</option>
                                                                                        <option value="Folclore">Folclore
                                                                                        </option>
                                                                                    @elseif($user->modalidade == 'Folclore')
                                                                                        <option value="Ballet">Ballet
                                                                                        </option>
                                                                                        <option value="Hip-Hop">Hip-Hop
                                                                                        </option>
                                                                                        <option value="Dança Espanhola">
                                                                                            Dança
                                                                                            Espanhola</option>
                                                                                        <option value="Danças Orientais">
                                                                                            Danças
                                                                                            Orientais</option>
                                                                                        <option selected value="Folclore">
                                                                                            Folclore
                                                                                        </option>
                                                                                    @elseif($user->modalidade == null)
                                                                                        <option selected hidden
                                                                                            value="null"> ---
                                                                                        </option>
                                                                                        <option value="Ballet">Ballet
                                                                                        </option>
                                                                                        <option value="Hip-Hop">Hip-Hop
                                                                                        </option>
                                                                                        <option value="Dança Espanhola">
                                                                                            Dança
                                                                                            Espanhola</option>
                                                                                        <option value="Danças Orientais">
                                                                                            Danças
                                                                                            Orientais</option>
                                                                                        <option value="Folclore">Folclore
                                                                                        </option>
                                                                                    @endif

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 text-end btn_edit_div">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn_edit">Editar</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>


                                        </tbody>


                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deletemodal{{ $user->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Conta
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div
                                                        class="modal-body d-flex justify-content-center align-items-center">
                                                        <div>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <div id="icon_delete ">
                                                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                                                </div>
                                                            </div>

                                                            <div id="delete_conta_text">
                                                                <h6>
                                                                    Tem a certeza que pretende eliminar a conta?
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary delete_fechar"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-primary delete_conta">Understood</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h6>Não existem categorias registadas</h6>
                                @endif



                            </table>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        {!! $users->withQueryString()->links() !!}
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
@endsection
