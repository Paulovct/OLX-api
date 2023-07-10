## Api OLX Laravel 10


## Requisitos
* PHP 8+
* Composer
* npm

## Instalação
Você pode clonar este repositório ou baixar o zip.

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install

Depois é só aguardar.

## Configuração

As Configurações Iniciais e as Configurações de Banco de Dados e URL estão no arquivo 
>.env

É importante configurar corretamente as constantes Referentes ao Banco de Dados


## Uso
Após a Instalação das Depêndencias para rodar o projeto Localmente:
Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> php artisan serve


Se não houver algum erro durante a instalação o projeto irá rodar na URL:
>http://127.0.0.1:8000


## Migrations e Seeders

Execute os seguintes comandos no Terminal.

>php artisan migrate

>php artisan db:seed

Para configurar o banco e criar dados *Imutaveis*.



## Modelo de Resposta
```json
{
    "status" : true,
    "error" : ""
}

```


# Rotas

>Route::post("/user/signup" , [UserController::class , "signup"]);
 Route::post("/user/signin" , [UserController::class , "signin"]);
 Route::get("/user/me" , [UserController::class , "info"]);
 Route::post("/ads" , [AdController::class , "store"]);
 Route::post("/ad/{id}" , [AdController::class , "update"]);
 Route::delete("/ad/{id}", [AdController::class , "destroy"]);
 Route::get("/ads" , [AdController::class , "index"]);
 Route::get("/ad/{id}" , [AdController::class , "show"]);
 Route::get("/states" , [StateController::class , "index"]);
 Route::get("/categories" , [CategoryController::class , "index"]);
