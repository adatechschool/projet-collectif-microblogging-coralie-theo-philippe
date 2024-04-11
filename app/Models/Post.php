<?php

/* Déclare que la classe "Post" est située dans l'espace de noms (namespace) "App\Models". 
Les espaces de noms sont utilisés pour organiser les classes et éviter les conflits de noms.*/
namespace App\Models;

/*Cette ligne importe la classe "HasFactory" du package "Illuminate\Database\Eloquent\Factories", 
ce qui permet à la classe "Post" d'utiliser certaines fonctionnalités de fabrication (factory) fournies par Eloquent, 
le système de gestion de base de données intégré à Laravel.*/
use Illuminate\Database\Eloquent\Factories\HasFactory;

/* cette ligne importe la classe "Model" du package "Illuminate\Database\Eloquent", 
ce qui permet à la classe "Post" d'étendre cette classe et d'hériter de ses fonctionnalités.*/
use Illuminate\Database\Eloquent\Model;

/*Cette ligne définit la classe "Post" en tant qu'extension de la classe "Model". 
Cela signifie que la classe "Post" héritera de toutes les méthodes et propriétés de la classe "Model", 
ce qui inclut des fonctionnalités de gestion des données comme la création, la mise à jour et la suppression.*/
class Post extends Model
{
    /* Ici, la classe "Post" utilise la fonctionnalité "HasFactory" via le trait (trait) "HasFactory". 
    Les traits sont des mécanismes de réutilisation de code dans PHP, et ici, le trait "HasFactory" 
    fournit des méthodes pour créer des instances de la classe "Post".*/
    use HasFactory;

    /*Cette ligne définit un tableau indiquant les attributs de la classe "Post" qui sont autorisés à être massivement attribués (mass assignable). 
    Cela signifie que ces attributs peuvent être définis en masse à l'aide de la méthode "create" d'Eloquent. 
    Dans ce code, les attributs autorisés sont "title", "picture", "content" et "user_id".*/
    protected $fillable = [ 
        "title",
        "picture",
        "content",
        "user_id",
    ];
    /*Cette partie du code définit une relation entre le modèle "Post" et le modèle "User". 
    Plus précisément, cela indique qu'un poste (Post) appartient à un utilisateur (User). 
    Cela est réalisé grâce à la méthode "belongsTo" d'Eloquent, qui établit une relation "many-to-one" entre les deux modèles.*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

/* Explication de la méthode "BelongTo" et ce qu'est une relation "many-to-one":

La méthode "belongsTo" est une fonctionnalité fournie par le framework Laravel 
dans le contexte de son ORM (Object-Relational Mapping) appelé Eloquent. 
Elle est utilisée pour établir une relation "many-to-one" entre deux entités de données.

Relation "Many-to-One" : 
Cette relation est un type de relation dans lequel plusieurs enregistrements d'une table peuvent être associés 
à un seul enregistrement d'une autre table. 
Par exemple, dans une relation "many-to-one" entre les tables "Posts" et "Users", 
plusieurs publications peuvent être associées à un seul utilisateur. 
Cette relation est souvent utilisée pour modéliser des hiérarchies ou des relations parent-enfant.

Méthode "belongsTo" : 
Dans le contexte d'Eloquent, la méthode "belongsTo" est utilisée pour définir une relation "many-to-one" entre deux modèles. 
Elle indique que l'objet du modèle actuel appartient à un autre objet du modèle cible. 
Par exemple, dans ce code, la méthode "belongsTo" est utilisée pour définir que chaque poste (Post) appartient à un utilisateur (User).

L'utilisation de la méthode "belongsTo" est simple. 
Elle prend en argument le nom de la classe du modèle cible auquel le modèle actuel appartient. 
Dans ce code, la classe cible est "User::class", qui représente le modèle utilisateur.

En résumé, la méthode "belongsTo" est utilisée dans Laravel pour définir des relations "many-to-one" entre deux modèles, 
indiquant qu'un objet du modèle actuel appartient à un objet du modèle cible. 
Cette méthode est un outil puissant pour modéliser des relations complexes entre les données dans une application web.*/