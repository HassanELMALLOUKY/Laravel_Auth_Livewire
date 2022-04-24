<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data') }}
        </h2>
    </x-slot>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest1" aria-expanded="true" aria-controls="collapseOne">
                   <h3>Question 1: Affichez en ordre alphabétique la liste des noms des agriculteurs.
                   </h3>
                </button>
            </h2>
            <div id="quest1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">Nom</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question1 as $question)
                            <tr>
                                <th>{{$question['agr_nom']}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest2" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 2: Affichez la liste des noms des parcelles dont la superficie est supérieure à 500.
                    </h3>
                </button>
            </h2>
            <div id="quest2" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">Nom</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question2 as $question)
                            <tr>
                                <th>{{$question['par_nom']}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest3" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 3: Affichez toutes les informations concernant les parcelles situées à Arith dont la
                        superficie est supérieure à 200 et inférieure à 500.
                    </h3>
                </button>
            </h2>
            <div id="quest3" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">par_nom</th>
                            <th scope="col">par_lieu</th>
                            <th scope="col">par_superficie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question3 as $question)
                            <tr>
                                <th>{{$question["par_nom"]}}</th>
                                <th>{{$question["par_lieu"]}}</th>
                                <th>{{$question["par_superficie"]}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest4" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 4: Affichez la liste de toutes les parcelles avec le nom de leurs propriétaires.
                    </h3>
                </button>
            </h2>
            <div id="quest4" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">par_nom</th>
                            <th scope="col">agr_nom</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question4 as $question)
                            <tr>
                                <th>{{$question["par_nom"]}}</th>
                                <th>{{$question["agr_nom"]}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest5" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 5: Affichez les interventions effectuées entre le 07-11-2011 et le 09-02-2012.
                    </h3>
                </button>
            </h2>
            <div id="quest5" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">int_nb_jours</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question5 as $question)
                            <tr>
                                <th>{{$question["int_nb_jours"]}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest6" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 6: Afficher pour chaque intervention le nom de la parcelle concernée.
                    </h3>
                </button>
            </h2>
            <div id="quest6" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">Debut d'intervention</th>
                            <th scope="col">le nom de la parcelle concernée</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question6 as $question)
                            <tr>
                                <th>{{$question["int_debut"]}}</th>
                                <th>{{$question["par_nom"]}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest7" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 7: Afficher pour chaque intervention le nom de la parcelle concernée et le nom de
                        l’employé.
                    </h3>
                </button>
            </h2>
            <div id="quest7" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">Debut d'intervention</th>
                            <th scope="col">le nom de la parcelle concernée</th>
                            <th scope="col">le nom de l’employé</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question7 as $question)
                            <tr>
                                <th>{{$question["int_debut"]}}</th>
                                <th>{{$question["par_nom"]}}</th>
                                <th>{{$question["emp_nom"]}}</th>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest8" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 8: Affichez les interventions de l’employe Pernet
                    </h3>
                </button>
            </h2>
            <div id="quest8" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-striped mytable">
                        <thead>
                        <tr>
                            <th scope="col">les interventions de l’employe Pernet</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($question8 as $question)
                            <tr>
                                <th>{{$question["int_debut"]}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest9" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 9: Calculez la superficie totale des parcelles.
                    </h3>
                </button>
            </h2>
            <div id="quest9" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>La superficie totale des parcelles :{{$question9}} </strong>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest10" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 10: Affichez le nom de la plus grande parcelle.
                    </h3>
                </button>
            </h2>
            <div id="quest10" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Affichez le nom de la plus grande parcelle : </strong>{{$question10["par_nom"]}}
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#quest11" aria-expanded="true" aria-controls="collapseOne">
                    <h3>Question 11: Affichez le nom de la plus petite parcelle.
                    </h3>
                </button>
            </h2>
            <div id="quest11" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Affichez le nom de la plus petite parcelle :</strong> {{$question11["par_nom"]}}
                </div>
            </div>
        </div>
    </div>


    </div>

<script>
    $(document).ready(function() {
        $('.mytable').DataTable({
            responsive: true,
        });
    });
</script>

</div>
