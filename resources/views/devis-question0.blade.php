@extends('layouts.app')

@section('content')
   


               

<style>

         /* Increase the font size and add padding to the label */
.form-group label {
  font-size: 20px;
  padding: 12px;
}

/* Style the form-check containers (background, border, padding, and border-radius) */
.form-group .custom-control {
  border: 0.5px solid rgba(255, 255, 255, 0.837); /* Adjust border width as needed */
  padding: 10px;
  background-color: white;
  border-radius: 30px;
  margin-bottom: 10px; /* Add spacing between options */
}

/* Style the radio input (padding and margin) */
.form-group input[type='radio'] {
  margin-left: 10px;
  padding: 10px;
  height: 10px;
}

/* Style des boutons radio */
.custom-control-input[type="radio"] {
  appearance: none; /* Supprime le style par défaut du navigateur */
  -webkit-appearance: none; /* Pour les navigateurs WebKit */
  -moz-appearance: none; /* Pour les navigateurs basés sur Gecko */
  width: 15px; /* Largeur du bouton radio */
  height: 5px; /* Hauteur du bouton radio */
  border: 1px solid blue; /* Couleur de la bordure */
  border-radius: 50%; /* Rend le bouton radio circulaire */
  background-color: #fff; /* Couleur de fond du bouton radio */
  margin-right: 2px; /* Marge à droite pour séparer les boutons */
  cursor: pointer; /* Curseur de type pointeur pour indiquer que le bouton est cliquable */
}

/* Style des boutons radio lorsqu'ils sont cochés */
.custom-control-input[type="radio"]:checked {
  background-color: blue; /* Couleur de fond lorsque le bouton est coché */
}

/* Style des labels associés aux boutons radio */
.custom-control-label {
  cursor: pointer; /* Curseur de type pointeur pour indiquer que le label est cliquable */
  margin-bottom: 5px; /* Marge en bas pour espacer les labels */
}
.box-question{
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 100%;
    border-radius: 10px;
}

.banner {
  background-image: url('assets/img/services/femme-travaillant-ordinateur.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  text-align: center;
  color: white;
  position: relative; /* Ajout de position relative */
}

.banner::before {
  content: '';
  position: absolute; /* Utilisation de position absolute pour le pseudo-élément */
  top: 0;
  width: 100%;
  left: 0;
  height: 100%;
  background-color: blue;
  opacity: 0.5;
  z-index: 1; /* Utilisation de z-index pour placer l'arrière-plan sous le contenu */
}

.banner .content {
  position: relative; /* Pour empiler le contenu sur l'arrière-plan */
  z-index: 1; /* Assurez-vous que le contenu est au premier plan */
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  text-align: center; /* Centrer le texte à l'intérieur de la div */
}


                </style>



<div class="banner">
   <div class="content"> <h3 class="text-light text-center">Quel est le prix pour un site professionnel</h3></div>
</div>

<div class="container box-question p-3">
<h3>QUESTION  0</h3>

<div class="form-group">
    <label><b>Quel type de site internet souhaitez-vous ?</b></label>
    <div class="custom-control custom-radio">
      <input class="custom-control-input" type="radio" name="radioOptions" id="optionA" value="optionA">
      <label class="custom-control-label" for="optionA">Site vitrine</label>
    </div>
    <div class="custom-control custom-radio">
      <input class="custom-control-input" type="radio" name="radioOptions" id="optionB" value="optionB">
      <label class="custom-control-label" for="optionB">Site e-commerce</label>
    </div>
    <div class="custom-control custom-radio">
      <input class="custom-control-input" type="radio" name="radioOptions" id="optionC" value="optionC">
      <label class="custom-control-label" for="optionC">Logiciel / Mobile</label>
    </div>
  </div>
<br><br>
  <div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary ml-auto p-2 w-25">Suivant </button>
  </div>
  
  
                  
                <br>
                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>


              

        </div>
    </section>
@endsection
