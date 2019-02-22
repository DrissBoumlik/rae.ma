
<div class="_container diplomas">
    <div class="row">
        <table class="table table-bordered display" id="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Durée</th>
                    <th scope="col">Diplôme délivré</th>
                    <th scope="col">Langue d'enseignement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Médecine générale</th>
                    <td>6 ans</td>
                    <td>MD (Doctor of Medicine / MBBS) </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
                <tr>
                    <th scope="row">Dentisterie</th>
                    <td>5 ans</td>
                    <td>MD (Doctor of Medicine / MBBS) </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
                <tr>
                    <th scope="row">Pédiatrie</th>
                    <td>6 ans</td>
                    <td>MD (Doctor of Medicine / MBBS) </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
                <tr>
                    <th scope="row">Pharmacie</th>
                    <td>5 ans</td>
                    <td>MD (Doctor of Medicine / MBBS) </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
                <tr>
                    <th scope="row">INFIRMERIE</th>
                    <td>4 ans</td>
                    <td>Baccalauréat en sciences infirmières  </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
                <tr>
                    <th scope="row">Formation postdoctorale / résidence clinique</th>
                    <td>2-3 ans</td>
                    <td>Études postdoctorales / Résidence en clinique dans le domaine requis </td>
                    <td>anglais / russe / ukrainien</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
if($('#table').length>0){
        var lang = $('html').attr('lang');
        $('#table').DataTable({
            responsive: true,
            // ordering:  false,
            paging: false,
            bInfo : false,
            language: {
                search: (lang == 'ar' ? "للبحث : " : (lang == 'en' ? "Search : " : "Rechercher : "))//"Search in table:"
            }
        }); 
    }
</script>