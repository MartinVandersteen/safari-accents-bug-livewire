<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  private $string;

  protected $appends = [
    'title'
  ];

  public function __construct($attributes = [])
  {
    parent::__construct($attributes);

    $this->string = 'Les dégâts locatifs sont extrêmement courants. Après les loyers impayés, il s’agit souvent de la deuxième crainte des bailleurs. Sont-ils un casse-tête pour vous ? Vous posez-vous des questions sur l’intérêt et la réalisation d’un état des lieux d’entrée et/ou de sortie ? Sur la détermination et la nature des dégâts locatifs et sur leur imputabilité à l’une ou l’autre des parties ?

    CET OUVRAGE EST FAIT POUR VOUS !
    La première partie aborde les dégâts locatifs sous l’angle juridique : quelles sont les obligations d’entretien et de remise en état du locataire ?
    Comment contrôler le respect de ces obligations ? Qu’en est-il dans les parties communes de l’immeuble ? Pourquoi l’état des lieux d’entrée est-il indispensable ? Comment établir cet état des lieux ? Et à la sortie, quel sort réserver aux travaux réalisés par le locataire ? Que sont les dégâts locatifs ? Peuvent-ils être réclamés même s’il n’y a aucun état des lieux d’entrée, etc.
    
    La seconde partie aborde les réalités pratiques de l’état d’un bien loué. Tout d’abord quelques conseils vous sont délivrés sur les matériaux à utiliser en cas de rénovation ou de construction, avant de mettre un bien en location. Ensuite, les dégâts locatifs et leur évaluation vous sont exposés. Vous trouverez également un tableau reprenant les différents prix unitaires des réparations courantes à comptabiliser en cas de dommage, ainsi qu’un tableau de vie moyenne des matériaux et des appareils. En outre, si vous êtes membre du SNPC et acquéreur de l’ouvrage, ce tableau actualisé est accessible en téléchargement.
    
    
    Auteurs :
    Jean Glaude, Ingénieur civil et architecte
    Dominique Pletinckx, Juriste au SNPC-NEMS
    
    150 pages
    Format : 210 x 150 mm';
  }

  public function getTitleAttribute()
  {
    return $this->string;
  }
}
