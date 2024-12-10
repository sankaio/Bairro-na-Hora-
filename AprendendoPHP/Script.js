const Hidden = document.querySelector("#ProntoI");

var TypeCheckbox;

class Postagem
{
    constructor(Tipo, Titulo, Subtitulo, Imagens, Texto)
    {
        this.Tipo = Tipo;
        this.Titulo = Titulo;
        this.Subtitulo = Subtitulo;
        this.Imagens = Imagens;
        this.Texto = Texto;
    }
}

function Change(Selecionado)
{
    var Noticia = document.querySelector("#NoticiaI");
    var Anuncio = document.querySelector("#AnuncioI");
    var Evento = document.querySelector("#EventoI");

    if(Selecionado === 1)
    {
        Anuncio.checked = false;
        Evento.checked = false;

        TypeCheckbox = Noticia;
    }

    if(Selecionado === 2)
    {
        Noticia.checked = false;
        Evento.checked = false;

        TypeCheckbox = Anuncio;
    }

    if(Selecionado === 3)
    {
        Noticia.checked = false;
        Anuncio.checked = false;

        TypeCheckbox = Evento;
    }
}

function Sub()
{
    const PostTitulo = document.querySelector("#TitleI");
    const PostSubtitulo = document.querySelector("#SubtitleI");
    const PostImagens = document.querySelector("#Imagens");
    const PostTexto = document.querySelector("#TextoI");

    const NovaPostagem = new Postagem(TypeCheckbox, PostTitulo, PostSubtitulo, PostImagens, PostTexto);

    const NovaPostagemJSON = JSON.stringify(NovaPostagem);

    Hidden.value = NovaPostagemJSON;
}