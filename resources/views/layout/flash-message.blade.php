@if(session('success'))
<section>
    <div class=" container mt-5">
        <div class="row success">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <strong class="font__weight-semibold">Enviado! </strong> O seu formulário foi enviado com Sucesso
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a>
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">X</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(session('erro'))
<section>
    <div class=" container mt-5">
        <div class="row erro">
            <div class="col-sm-12">
                <div class="alert fade alert-simple alert-erro alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                    <strong class="font__weight-semibold">Ups! </strong> Ocorreu um erro, tenta novamente mais tarde
                    <button type="button" class="close font__size-18" data-dismiss="alert">
                        <span aria-hidden="true"><a>
                                <i class="fa fa-times greencross"></i>
                            </a></span>
                        <span class="sr-only">X</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif