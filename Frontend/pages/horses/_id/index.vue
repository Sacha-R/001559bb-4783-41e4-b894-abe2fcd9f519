<template>
  <v-card>
    <v-card-title>
      <v-row>
        <v-col class="mt-4 ml-4"
          ><h3>
            Fiche cheval:<v-spacer></v-spacer>
            <span style="color: green">{{ Horse.horse_nom }}</span>
          </h3></v-col
        >
        <v-col cols="3">
          <v-avatar tile size="128">
            <img src="equi.jpg" alt="Pas de photo" /></v-avatar
        ></v-col>
      </v-row>
    </v-card-title>
    <v-divider class="ma-6"></v-divider>
    <!-- Affichage des données correspondant au cheval séléctionner -->
    <v-card class="ma-6" flat>
      <v-row>
        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Race:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_race }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">SIRE:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_sire }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Robe:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_robe }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Sexe:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_sexe }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Taille:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_taille }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">naissance:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_datenaissance }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Père:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_pere }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Mère:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_mere }}</h5>
          </v-card>
        </v-col>

        <v-col cols="6">
          <v-card color="#444" class="d-flex" rounded>
            <h3 class="mx-6">Pays:</h3>
            <h5 class="d-flex align-center">{{ Horse.horse_country }}</h5>
          </v-card>
        </v-col>
      </v-row>
    </v-card>
    <a href="/" class="d-flex justify-end mr-6"
      >Retourner à la liste des chevaux</a
    >
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      // Ici les données en dur fournis au début de l'exercice
      horses: [
        {
          horse_nom: 'ULANIA TOURNERIE',
          horse_sire: '08027138',
          horse_cle: 'Z',
          horse_race: 'SFA',
          horse_robe: 'BAI BF',
          horse_sexe: 'F',
          horse_country: '2',
          horse_taille: '172',
          horse_datenaissance: '14/5/2008',
          horse_pere: 'DOLLAR DELA PIERRE',
          horse_mere: 'JALANIA ROC',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'DING DING DONG',
          horse_sire: '13307518',
          horse_cle: 'F',
          horse_race: 'AQPS',
          horse_robe: 'BAI',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '29/3/2013',
          horse_pere: 'GENTLEWAVE',
          horse_mere: 'TOQUE ROUGE',
        },
        {
          horse_nom: 'VICTOR HUGO ALEZAN',
          horse_sire: '46998098',
          horse_cle: 'K',
          horse_race: 'PS',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '21/4/2009',
          horse_pere: 'TOYLSOME',
          horse_mere: 'VALIANI',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'TEST DE KERBRAS',
          horse_sire: '07003832',
          horse_cle: 'N',
          horse_race: 'BR',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '16/5/2007',
          horse_pere: 'FEST DEIZ',
          horse_mere: 'ISSA DE KERBRAS',
        },
        {
          horse_nom: 'TEST DE BARON',
          horse_sire: '85120698',
          horse_cle: 'B',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '23/4/1985',
          horse_pere: 'LUKO BONHEUR',
          horse_mere: 'BUE',
        },
        {
          horse_nom: 'TEST DE PIRJOU',
          horse_sire: '85103105',
          horse_cle: 'Z',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '2/5/1985',
          horse_pere: 'THOR',
          horse_mere: 'LINDA DE LANDISACQ',
        },
        {
          horse_nom: 'TEST DE PITZ',
          horse_sire: '85103596',
          horse_cle: 'Q',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '18/6/1985',
          horse_pere: 'NESTORIAC',
          horse_mere: 'OSTAMINA',
        },
        {
          horse_nom: 'TEST DE LANGERS',
          horse_sire: '85175618',
          horse_cle: 'F',
          horse_race: 'SFA',
          horse_robe: 'ALEZAN',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '16/5/1985',
          horse_pere: 'KAPOC',
          horse_mere: 'AMIE SIX B',
        },
        {
          horse_nom: 'FLIKA',
          horse_sire: '52145183',
          horse_cle: 'C',
          horse_race: 'ONCP',
          horse_robe: 'GRIS',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '106',
          horse_datenaissance: '1/1/1996',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'FLIKA',
          horse_sire: '52145183',
          horse_cle: 'C',
          horse_race: 'ONCP',
          horse_robe: 'GRIS',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '106',
          horse_datenaissance: '1/1/1996',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'FLIKA',
          horse_sire: '52145183',
          horse_cle: 'C',
          horse_race: 'ONCP',
          horse_robe: 'GRIS',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '106',
          horse_datenaissance: '1/1/1996',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'DING DING DONG',
          horse_sire: '91421583',
          horse_cle: 'N',
          horse_race: 'TF',
          horse_robe: 'ALEZAN',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '9/5/1991',
          horse_pere: 'NOMIUS',
          horse_mere: 'UNIE CHATELAINE',
        },
        {
          horse_nom: 'JEAN MICHEL DES LIANDRIES',
          horse_sire: '52648383',
          horse_cle: 'W',
          horse_race: 'ONCA',
          horse_robe: 'NOIPAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '1/1/2011',
          horse_pere: 'null',
          horse_mere: 'null',
        },
        {
          horse_nom: 'BITJET DIAMS LA RUBIA',
          horse_sire: '11520095',
          horse_cle: 'G',
          horse_race: 'SF',
          horse_robe: 'ALEZAN',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '164',
          horse_datenaissance: '20/5/2011',
          horse_pere: 'DIAMANT DE SEMILLY',
          horse_mere: 'HUSNEE DU PARC',
        },
        {
          horse_nom: 'IL BONDIT',
          horse_sire: '74013614',
          horse_cle: 'T',
          horse_race: 'SFA',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '5/4/1974',
          horse_pere: 'OLIFANT',
          horse_mere: 'CRINOLINE I',
        },
        {
          horse_nom: 'NICANTO DE JAF',
          horse_sire: '01355650',
          horse_cle: 'R',
          horse_race: 'SFA',
          horse_robe: 'BAI',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '27/3/2001',
          horse_pere: 'COL CANTO',
          horse_mere: 'CLEOPATRE MONA',
        },
        {
          horse_nom: 'URFEE VILLELONGUE',
          horse_sire: '08105160',
          horse_cle: 'S',
          horse_race: 'SFA',
          horse_robe: 'BAI',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '165',
          horse_datenaissance: '21/5/2008',
          horse_pere: "IDEM DE B'NEVILLE",
          horse_mere: "GRANDIOSE'JAC",
        },
        {
          horse_nom: 'VICTORHUGO BOISMARGOT',
          horse_sire: '09251594',
          horse_cle: 'T',
          horse_race: 'SF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '170',
          horse_datenaissance: '10/8/2009',
          horse_pere: 'QUAPRICE BOIMARGOT QUINCY',
          horse_mere: 'QUOMETE BOIS MARGOT',
        },
        {
          horse_nom: 'VICTORHUGO BOISMARGOT',
          horse_sire: '09251594',
          horse_cle: 'T',
          horse_race: 'SF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '170',
          horse_datenaissance: '10/8/2009',
          horse_pere: 'QUAPRICE BOIMARGOT QUINCY',
          horse_mere: 'QUOMETE BOIS MARGOT',
        },
        {
          horse_nom: 'ISIS DE LA TREMBLAIE',
          horse_sire: '18463684',
          horse_cle: 'C',
          horse_race: 'PER',
          horse_robe: 'NOIR',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '15/3/2018',
          horse_pere: 'TITUS DE VANOISE',
          horse_mere: 'PRINCESSE DU NARAIS',
        },
        {
          horse_nom: 'IS DE LA BOISSIERE',
          horse_sire: '18120923',
          horse_cle: 'T',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '10/6/2018',
          horse_pere: 'RICIMER',
          horse_mere: "UTOPIE D'HERFRAIE",
        },
        {
          horse_nom: 'IS DE LA BOISSIERE',
          horse_sire: '18120923',
          horse_cle: 'T',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '10/6/2018',
          horse_pere: 'RICIMER',
          horse_mere: "UTOPIE D''HERFRAIE",
        },
        {
          horse_nom: 'IS DE LA BOISSIERE',
          horse_sire: '18120923',
          horse_cle: 'T',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '10/6/2018',
          horse_pere: 'RICIMER',
          horse_mere: "UTOPIE D'HERFRAIE",
        },
        {
          horse_nom: 'IS DE LA BOISSIERE',
          horse_sire: '18120923',
          horse_cle: 'T',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '10/6/2018',
          horse_pere: 'QUAPRICE BOIMARGOT QUINCY',
          horse_mere: 'QUOMETE BOIS MARGOT',
        },
        {
          horse_nom: 'VICTORHUGO BOISMARGOT',
          horse_sire: '09251594',
          horse_cle: 'T',
          horse_race: 'SF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '170',
          horse_datenaissance: '10/8/2009',
          horse_pere: 'QUAPRICE BOIMARGOT QUINCY',
          horse_mere: 'QUOMETE BOIS MARGOT',
        },
        {
          horse_nom: 'VICTORHUGO BOISMARGOT',
          horse_sire: '09251594',
          horse_cle: 'T',
          horse_race: 'SF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '170',
          horse_datenaissance: '10/8/2009',
          horse_pere: 'LE PONTET',
          horse_mere: 'MARRY IN HASTE',
        },
        {
          horse_nom: 'PRIEUR DE RICHERIE',
          horse_sire: '85184753',
          horse_cle: 'B',
          horse_race: 'PS',
          horse_robe: 'BAI',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '5/5/1985',
          horse_pere: 'LE PONTET',
          horse_mere: 'MARRY IN HASTE',
        },
        {
          horse_nom: 'IS DE LA BOISSIERE',
          horse_sire: '18120923',
          horse_cle: 'T',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '10/6/2018',
          horse_pere: 'TOYLSOME',
          horse_mere: 'VALIANI',
        },
        {
          horse_nom: 'VICTOR HUGO ALEZAN',
          horse_sire: '46998098',
          horse_cle: 'K',
          horse_race: 'PS',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '21/4/2009',
          horse_pere: 'TOYLSOME',
          horse_mere: 'VALIANI',
        },
        {
          horse_nom: 'IS DE LA JOUV',
          horse_sire: '52810314',
          horse_cle: 'J',
          horse_race: 'ONCS',
          horse_robe: 'ISABEL',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '25/5/2018',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'ISIS DE LA TOUR',
          horse_sire: '96014902',
          horse_cle: 'A',
          horse_race: 'AR',
          horse_robe: 'ALZMEL',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '4/4/1996',
          horse_pere: "EMIR D'ESPIENS",
          horse_mere: 'MOON LIGHT DREAM',
        },
        {
          horse_nom: 'ISIS DE LA TREMBLAIE',
          horse_sire: '18463684',
          horse_cle: 'C',
          horse_race: 'PER',
          horse_robe: 'NOIR',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '15/3/2018',
          horse_pere: 'TITUS DE VANOISE',
          horse_mere: 'PRINCESSE DU NARAIS',
        },
        {
          horse_nom: 'VICTORHUGO BOISMARGOT',
          horse_sire: '09251594',
          horse_cle: 'T',
          horse_race: 'SF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '170',
          horse_datenaissance: '10/8/2009',
          horse_pere: 'QUAPRICE BOIMARGOT QUINCY',
          horse_mere: 'QUOMETE BOIS MARGOT',
        },
        {
          horse_nom: 'BOURDALES',
          horse_sire: 'WN5761',
          horse_cle: '',
          horse_race: 'OITT',
          horse_robe: 'BAIPIE',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '153',
          horse_datenaissance: '1/1/1988',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'PRIEUR',
          horse_sire: '46732575',
          horse_cle: 'X',
          horse_race: 'PS',
          horse_robe: 'TACHE',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '153',
          horse_datenaissance: '1/1/1968',
          horse_pere: 'FORT NATIONAL',
          horse_mere: 'LA POMMERAYE',
        },
        {
          horse_nom: 'STRAEBLER',
          horse_sire: '84016903',
          horse_cle: 'D',
          horse_race: 'TF',
          horse_robe: 'ALEZAN',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '160',
          horse_datenaissance: '6/4/1984',
          horse_pere: 'KNOX',
          horse_mere: 'SALVIAM',
        },
        {
          horse_nom: 'MEGERA',
          horse_sire: '14452622',
          horse_cle: 'C',
          horse_race: 'PS',
          horse_robe: 'BAI',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '18/3/2014',
          horse_pere: 'MOTIVATOR',
          horse_mere: 'MANTISSA',
        },
        {
          horse_nom: 'GHALIA DU NOUVION',
          horse_sire: '16350607',
          horse_cle: 'A',
          horse_race: 'AR',
          horse_robe: 'BAICER',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '24/3/2016',
          horse_pere: 'TIBET',
          horse_mere: 'BAMBA DES PINS',
        },
        {
          horse_nom: 'GHALIA DU NOUVION',
          horse_sire: '16350607',
          horse_cle: 'A',
          horse_race: 'AR',
          horse_robe: 'BAICER',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '24/3/2016',
          horse_pere: 'TIBET',
          horse_mere: 'BAMBA DES PINS',
        },
        {
          horse_nom: 'DING DING DONG',
          horse_sire: '13307518',
          horse_cle: 'F',
          horse_race: 'AQPS',
          horse_robe: 'BAI',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '29/3/2013',
          horse_pere: 'GENTLEWAVE',
          horse_mere: 'TOQUE ROUGE',
        },
        {
          horse_nom: 'RICHARD DE BELLE FONTAINE',
          horse_sire: '52455301',
          horse_cle: 'S',
          horse_race: 'ONCS',
          horse_robe: 'BAI F.',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '1/1/1995',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'DING DING DONG',
          horse_sire: '91421583',
          horse_cle: 'N',
          horse_race: 'TF',
          horse_robe: 'ALEZAN',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '0',
          horse_datenaissance: '9/5/1991',
          horse_pere: 'NOMIUS',
          horse_mere: 'UNIE CHATELAINE',
        },
        {
          horse_nom: 'Jean richard Manuel',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'AT',
          horse_robe: 'AL AUB',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '24/4/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'BOUDRALES Manuel',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'FELL',
          horse_robe: 'AL AUB',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '29/4/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'Richard Pastel',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'ZW',
          horse_robe: 'PINOIR',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '3/6/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'ULANIA DU LANGRIER',
          horse_sire: '08064399',
          horse_cle: 'Y',
          horse_race: 'APPAL',
          horse_robe: 'BAI',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '139',
          horse_datenaissance: '19/6/2008',
          horse_pere: 'RUSTY CHIEF CHINOOK',
          horse_mere: 'JOUSIAUX',
        },
        {
          horse_nom: 'IT BOY ALIAS',
          horse_sire: '18184092',
          horse_cle: 'G',
          horse_race: 'PFS',
          horse_robe: 'BAI F.',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '9/5/2018',
          horse_pere: 'USANDRO TILIA DERLENN',
          horse_mere: 'QUACKEL DES BOURDONS',
        },
        {
          horse_nom: 'IT BOY ALIAS',
          horse_sire: '18184092',
          horse_cle: 'G',
          horse_race: 'PFS',
          horse_robe: 'BAI F.',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '9/5/2018',
          horse_pere: 'USANDRO TILIA DERLENN',
          horse_mere: 'QUACKEL DES BOURDONS',
        },
        {
          horse_nom: 'JEAN CLAUDE',
          horse_sire: '19011808',
          horse_cle: 'Q',
          horse_race: 'BR',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '150',
          horse_datenaissance: '26/2/2019',
          horse_pere: 'SANTIC DE KERBRAS',
          horse_mere: 'DECIBELLE 10',
        },
        {
          horse_nom: 'Gisèle',
          horse_sire: '',
          horse_cle: '',
          horse_race: '*AC*',
          horse_robe: 'AL BRU',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '27/11/2018',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'EXTRA DU BONCOIN',
          horse_sire: '14122386',
          horse_cle: 'E',
          horse_race: 'BOUL',
          horse_robe: 'GRIS',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '159',
          horse_datenaissance: '21/5/2014',
          horse_pere: 'NAPPOLEON',
          horse_mere: 'QUERELLE DU BONCOIN',
        },
        {
          horse_nom: 'N2020ULANIA TOURNERIE',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'SFA',
          horse_robe: 'UKN',
          horse_sexe: 'IND',
          horse_country: '0',
          horse_taille: '',
          horse_datenaissance: '9/7/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'N2020ULANIA TOURNERIE',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'SFA',
          horse_robe: 'UKN',
          horse_sexe: 'IND',
          horse_country: '0',
          horse_taille: '',
          horse_datenaissance: '9/7/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'N2020ULANIA TOURNERIE',
          horse_sire: '',
          horse_cle: '',
          horse_race: 'SFA',
          horse_robe: 'UKN',
          horse_sexe: 'IND',
          horse_country: '0',
          horse_taille: '',
          horse_datenaissance: '9/7/2020',
          horse_pere: '',
          horse_mere: '',
        },
        {
          horse_nom: 'TU PEUX REVER',
          horse_sire: '07359002',
          horse_cle: 'J',
          horse_race: 'SFA',
          horse_robe: 'GRIS',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '10/4/2007',
          horse_pere: 'URFA DE KERPRAT',
          horse_mere: 'DOFA DU CHATILLON',
        },
        {
          horse_nom: 'FACE TIME BOURBON',
          horse_sire: '15164868',
          horse_cle: 'X',
          horse_race: 'TF',
          horse_robe: 'BAI',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '4/3/2015',
          horse_pere: 'READY CASH',
          horse_mere: 'VITA BOURBON',
        },
        {
          horse_nom: 'READY CASH',
          horse_sire: '05090571',
          horse_cle: 'U',
          horse_race: 'TF',
          horse_robe: 'BAI F.',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '20/5/2005',
          horse_pere: 'INDY DE VIVE',
          horse_mere: 'KIDEA',
        },
        {
          horse_nom: 'COLIN DE CADEAC 2',
          horse_sire: '12539837',
          horse_cle: 'R',
          horse_race: 'BR',
          horse_robe: 'ALEZAN',
          horse_sexe: 'M',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '10/5/2012',
          horse_pere: 'HORPHE DU VENAY',
          horse_mere: 'LEA 93',
        },
        {
          horse_nom: 'JALANIA ROC',
          horse_sire: '97079269',
          horse_cle: 'E',
          horse_race: 'SFA',
          horse_robe: 'ALEZAN',
          horse_sexe: 'F',
          horse_country: '75',
          horse_taille: '',
          horse_datenaissance: '5/5/1997',
          horse_pere: 'DIAMANT ROUGE II',
          horse_mere: 'ALANIA',
        },
        {
          horse_nom: 'CORNET AMOUR',
          horse_sire: '46185977',
          horse_cle: 'A',
          horse_race: 'OLD',
          horse_robe: 'GRIS',
          horse_sexe: 'H',
          horse_country: '75',
          horse_taille: '165',
          horse_datenaissance: '7/2/2010',
          horse_pere: "CORNET'S STERN",
          horse_mere: 'PATRICE',
        },
      ],
      sexe: [
        {
          sexe_code: 'M',
          sexe_label: 'Mâle',
        },
        {
          sexe_code: 'H',
          sexe_label: 'Hongre',
        },
        {
          sexe_code: 'F',
          sexe_label: 'Femelle',
        },
        {
          sexe_code: 'IND',
          sexe_label: 'Ind.',
        },
      ],
      race: [
        {
          race_code: 'PS',
          race_label: 'PUR SANG',
        },
        {
          race_code: 'AC',
          race_label: 'ANGLO-ARABE DE COMPLEMENT',
        },
        {
          race_code: 'AQPS',
          race_label: 'CHEVAL AUTRE QUE PUR SANG',
        },
        {
          race_code: 'AES',
          race_label: 'ANGLO-EUROPEEN',
        },
        {
          race_code: 'APH',
          race_label: 'APH-AUSTRALIAN PERF HORSE',
        },
        {
          race_code: 'AWB',
          race_label: 'SELLE AUSTRALIEN',
        },
        {
          race_code: 'AWR',
          race_label: 'CHEVAL DE SPORT AMERICAIN',
        },
        {
          race_code: 'BAWUE',
          race_label: 'WURTTEMBERGER',
        },
        {
          race_code: 'BH',
          race_label: 'CHEVAL DE SPORT BRESILIEN',
        },
        {
          race_code: 'BRDB',
          race_label: 'BRANDEBOURGEOIS',
        },
        {
          race_code: 'BWP',
          race_label: 'CHEVAL DE SANG BELGE',
        },
        {
          race_code: 'BYWBL',
          race_label: 'BAVAROIS',
        },
        {
          race_code: 'SF',
          race_label: 'SELLE FRANCAIS',
        },
        {
          race_code: 'CW',
          race_label: 'CANADIAN WARMBLOOD',
        },
        {
          race_code: 'CDM',
          race_label: 'CABALLO DEPORTIVO MEXICANO',
        },
        {
          race_code: 'CH',
          race_label: 'WARMBLUT SPORTPFERD',
        },
        {
          race_code: 'CSHA',
          race_label: 'CHEVAL DE SPORT CANADIEN',
        },
        {
          race_code: 'DP',
          race_label: 'CHEVAL ALLEMAND',
        },
        {
          race_code: 'DWB',
          race_label: 'DANOIS SANG-CHAUD',
        },
        {
          race_code: 'FWB',
          race_label: 'FINNISH WARMBLOOD',
        },
        {
          race_code: 'H',
          race_label: 'HESSOIS',
        },
        {
          race_code: 'HAN',
          race_label: 'HANOVRIEN',
        },
        {
          race_code: 'HOLST',
          race_label: 'HOLSTEINER',
        },
        {
          race_code: 'DS',
          race_label: 'DEMI SANG',
        },
        {
          race_code: 'ISH',
          race_label: 'IRISH SPORT HORSE',
        },
        {
          race_code: 'KWPN',
          race_label: 'KWPN',
        },
        {
          race_code: 'MECKL',
          race_label: 'MECKLEMBOURGEOIS',
        },
        {
          race_code: 'NFVH',
          race_label: 'NORWEGIAN',
        },
        {
          race_code: 'NRPS',
          race_label: 'PONEY DE SPORT HOLLANDAIS',
        },
        {
          race_code: 'NZSH',
          race_label: 'NEW ZEALAND SPORTHORSE',
        },
        {
          race_code: 'OLD',
          race_label: 'OLDENBOURG',
        },
        {
          race_code: 'PRE',
          race_label: 'PURE RACE ESPAGNOLE',
        },
        {
          race_code: 'RHDL',
          race_label: 'RHENAN SANG-CHAUD',
        },
        {
          race_code: 'SAHNA',
          race_label: 'SAXE ANHALTINER',
        },
        {
          race_code: 'CSSF',
          race_label: 'CHEVAL DE SELLE (FACT.SF)',
        },
        {
          race_code: 'SAW',
          race_label: 'SUD AFRICAIN SANG-CHAUD',
        },
        {
          race_code: 'SBS',
          race_label: 'CHEVAL DE SPORT BELGE',
        },
        {
          race_code: 'SHB',
          race_label: 'BRITANNIQUE SANG-CHAUD',
        },
        {
          race_code: 'SI',
          race_label: 'CHEVAL DE SELLE ITALIEN',
        },
        {
          race_code: 'SL',
          race_label: 'SELLE LUXEMBOURGEOIS',
        },
        {
          race_code: 'SWB',
          race_label: 'CHEVAL DE SELLE SUEDOIS',
        },
        {
          race_code: 'THU',
          race_label: 'SELLE DE THURINGE',
        },
        {
          race_code: 'WESTF',
          race_label: 'WESTPHALIEN',
        },
        {
          race_code: 'Z',
          race_label: 'ZANGERSHEIDE',
        },
        {
          race_code: 'ZW',
          race_label: 'ZWEIBRUECKER',
        },
        {
          race_code: 'SESF',
          race_label: 'SELLE ETRANGER (FACT.SF)',
        },
        {
          race_code: 'BW',
          race_label: 'PUR SANG ANGLAIS',
        },
        {
          race_code: 'HSH',
          race_label: 'CHEVAL DE SPORT HONGROIS',
        },
        {
          race_code: 'SW',
          race_label: 'SANG-CHAUD LOURD DE SAXE-THURINGE',
        },
        {
          race_code: 'CDE',
          race_label: 'CHEVAL DE SPORT ESPAGNOL',
        },
        {
          race_code: 'AT',
          race_label: 'AKHAL TEKE',
        },
        {
          race_code: 'FRI',
          race_label: 'CHEVAL FRISON',
        },
        {
          race_code: 'DRPON',
          race_label: 'PONEY DE SELLE ALLEMAND',
        },
        {
          race_code: 'SP',
          race_label: 'BRITISH SPOTTED PONY',
        },
        {
          race_code: 'SH',
          race_label: 'SHIRE',
        },
        {
          race_code: 'FRMON',
          race_label: 'FRANCHES-MONTAGNES',
        },
        {
          race_code: 'OISF',
          race_label: 'ORIGINE INCONNUE FACT.SF',
        },
        {
          race_code: 'HEN',
          race_label: 'CHEVAL HENSON',
        },
        {
          race_code: 'IDH',
          race_label: 'TRAIT IRLANDAIS',
        },
        {
          race_code: 'CASP',
          race_label: 'CASPIEN',
        },
        {
          race_code: 'FELL',
          race_label: 'FELL',
        },
        {
          race_code: 'TB',
          race_label: 'TRAIT BELGE',
        },
        {
          race_code: 'AACR',
          race_label: 'ANGLO-ARABE DE CROISEMENT',
        },
        {
          race_code: 'EX',
          race_label: 'EXMOOR PONY',
        },
        {
          race_code: 'PAINT',
          race_label: 'PAINT HORSE',
        },
        {
          race_code: 'CREME',
          race_label: 'CHEVAL CREME',
        },
        {
          race_code: 'IC',
          race_label: 'IRISH COB',
        },
        {
          race_code: 'CAST',
          race_label: 'CHEVAL CASTILLONNAIS',
        },
        {
          race_code: 'RM',
          race_label: 'ROCKY MOUNTAIN',
        },
        {
          race_code: 'BRP',
          race_label: 'PONEY DE SELLE BRITANNIQUE',
        },
        {
          race_code: 'SSH',
          race_label: 'CHEVAL DE SPORT ECOSSAIS',
        },
        {
          race_code: 'CPD',
          race_label: 'CHEVAL PORTUGAIS DE SPORT',
        },
        {
          race_code: 'GC',
          race_label: 'COB GYPSY',
        },
        {
          race_code: 'CB',
          race_label: 'CLEVELAND BAY',
        },
        {
          race_code: 'CD',
          race_label: 'CLYDESDALE',
        },
        {
          race_code: 'OCM',
          race_label: "MULE D'ORIGINE CONSTATEE",
        },
        {
          race_code: 'DSAA',
          race_label: 'DEMI SANG ANGLO-ARABE',
        },
        {
          race_code: 'MINI',
          race_label: 'CHEVAL MINIATURE',
        },
        {
          race_code: 'OCA',
          race_label: "ANE D'ORIGINE CONSTATEE",
        },
        {
          race_code: 'HACK',
          race_label: 'HACKNEY',
        },
        {
          race_code: 'ARFR',
          race_label: 'CHEVAL ARABO-FRISON',
        },
        {
          race_code: 'NKT',
          race_label: 'NOKOTA',
        },
        {
          race_code: 'DALES',
          race_label: 'DALES',
        },
        {
          race_code: 'CURLY',
          race_label: 'CHEVAL CURLY',
        },
        {
          race_code: 'OC',
          race_label: 'ORIGINE CONSTATEE',
        },
        {
          race_code: 'OC.',
          race_label: 'ORIGINE CONSTATEE',
        },
        {
          race_code: 'TF',
          race_label: 'TROTTEUR FRANCAIS',
        },
        {
          race_code: 'CS',
          race_label: 'CHEVAL DE SELLE',
        },
        {
          race_code: 'NC',
          race_label: 'NON CONSTATEE',
        },
        {
          race_code: 'OI',
          race_label: 'ORIGINE INCONNUE',
        },
        {
          race_code: 'CSTPB',
          race_label: 'CHEVAL DE SELLE (FACT.PB)',
        },
        {
          race_code: 'SE',
          race_label: 'CHEVAL DE SELLE ETRANGER',
        },
        {
          race_code: 'TE',
          race_label: 'TROTTEUR ETRANGER',
        },
        {
          race_code: 'OE',
          race_label: 'ORIGINE ETRANGERE',
        },
        {
          race_code: 'CAM',
          race_label: 'CAMARGUE',
        },
        {
          race_code: 'TETF',
          race_label: 'TROTT.ETRANGER (FACT.TF)',
        },
        {
          race_code: 'DSA',
          race_label: 'DEMI-SANG ARABE',
        },
        {
          race_code: 'AR',
          race_label: 'ARABE',
        },
        {
          race_code: 'LUS',
          race_label: 'PURE RACE LUSITANIENNE',
        },
        {
          race_code: 'BA',
          race_label: 'BARBE',
        },
        {
          race_code: 'LIP',
          race_label: 'LIPIZZAN',
        },
        {
          race_code: 'SHA',
          race_label: 'SHAGYA',
        },
        {
          race_code: 'TRAK',
          race_label: 'TRAKEHNER',
        },
        {
          race_code: 'QH',
          race_label: 'QUARTER HORSE',
        },
        {
          race_code: 'QHX',
          race_label: 'QUARTER HORSE APPENDIX',
        },
        {
          race_code: 'APPAL',
          race_label: 'APPALOOSA',
        },
        {
          race_code: 'AB',
          race_label: 'ARABE-BARBE',
        },
        {
          race_code: 'RI',
          race_label: 'RACE INCONNUE',
        },
        {
          race_code: 'DSAR',
          race_label: 'D.S. ARABE',
        },
        {
          race_code: 'TR',
          race_label: 'CHEVAL DE TRAIT',
        },
        {
          race_code: 'ARD',
          race_label: 'TRAIT ARDENNAIS',
        },
        {
          race_code: 'TDN',
          race_label: 'TRAIT DU NORD',
        },
        {
          race_code: 'AUX',
          race_label: 'TRAIT AUXOIS',
        },
        {
          race_code: 'BOUL',
          race_label: 'TRAIT BOULONNAIS',
        },
        {
          race_code: 'BR',
          race_label: 'TRAIT BRETON',
        },
        {
          race_code: 'COBND',
          race_label: 'COB NORMAND',
        },
        {
          race_code: 'COMT',
          race_label: 'TRAIT COMTOIS',
        },
        {
          race_code: 'PER',
          race_label: 'TRAIT PERCHERON',
        },
        {
          race_code: 'POIT',
          race_label: 'POITEVIN MULASSIER',
        },
        {
          race_code: 'AA',
          race_label: 'ANGLO-ARABE',
        },
        {
          race_code: 'OITT',
          race_label: "TRAIT D'ORIGINE INCONNUE",
        },
        {
          race_code: 'COB',
          race_label: 'COB',
        },
        {
          race_code: 'APY',
          race_label: 'ANE DES PYRENEES',
        },
        {
          race_code: 'AN',
          race_label: 'ANE NORMAND',
        },
        {
          race_code: 'APRO',
          race_label: 'ANE DE PROVENCE',
        },
        {
          race_code: 'ANE',
          race_label: 'ANE',
        },
        {
          race_code: 'BDP',
          race_label: 'BAUDET DU POITOU',
        },
        {
          race_code: 'AGNB',
          race_label: 'ANE GRAND NOIR DU BERRY',
        },
        {
          race_code: 'BARD',
          race_label: 'BARDOT',
        },
        {
          race_code: 'MUL',
          race_label: 'MULET',
        },
        {
          race_code: '*AA*',
          race_label: '*ANGLO-ARABE*',
        },
        {
          race_code: 'ACO',
          race_label: 'ANE DU COTENTIN',
        },
        {
          race_code: 'CO',
          race_label: 'CONNEMARA',
        },
        {
          race_code: 'DA',
          race_label: 'DARTMOOR',
        },
        {
          race_code: 'FJ',
          race_label: 'CHEVAL FJORD',
        },
        {
          race_code: 'PFS',
          race_label: 'PONEY FRANCAIS DE SELLE',
        },
        {
          race_code: 'HAF',
          race_label: 'PONEY HAFLINGER',
        },
        {
          race_code: 'HIG',
          race_label: 'HIGHLAND',
        },
        {
          race_code: 'IS',
          race_label: 'ISLANDAIS',
        },
        {
          race_code: 'LAND',
          race_label: 'PONEY LANDAIS',
        },
        {
          race_code: 'MER',
          race_label: 'CHEVAL DE MERENS',
        },
        {
          race_code: 'CSAA',
          race_label: 'CHEVAL DE SELLE (FACT.AA)',
        },
        {
          race_code: 'NF',
          race_label: 'NEW-FOREST',
        },
        {
          race_code: 'POT',
          race_label: 'POTTOK',
        },
        {
          race_code: 'SHE',
          race_label: 'SHETLAND',
        },
        {
          race_code: 'WA',
          race_label: 'WELSH SECTION A',
        },
        {
          race_code: 'WB',
          race_label: 'WELSH SECTION B',
        },
        {
          race_code: 'WTC',
          race_label: 'WELSH TYPE COB (SECTION C)',
        },
        {
          race_code: 'WD',
          race_label: 'WELSH COB SECTION D',
        },
        {
          race_code: 'W',
          race_label: 'WELSH',
        },
        {
          race_code: 'WX',
          race_label: 'WELSH SECTION X',
        },
        {
          race_code: 'WK',
          race_label: 'WELSH SECTION K',
        },
        {
          race_code: 'SF.',
          race_label: 'SELLE FRANCAIS',
        },
        {
          race_code: 'PO',
          race_label: 'PONEY',
        },
        {
          race_code: 'OITP',
          race_label: "PONEY D'ORIGINE INCONNUE",
        },
        {
          race_code: 'POET',
          race_label: 'ORIGINE ETRANGERE PONEY',
        },
        {
          race_code: 'OES',
          race_label: 'ORIGINE ETRANGERE SELLE',
        },
        {
          race_code: 'OET',
          race_label: 'ORIGINE ETRANGERE TRAIT',
        },
        {
          race_code: 'OEA',
          race_label: 'ORIGINE ETRANGERE ANE',
        },
        {
          race_code: 'OEP',
          race_label: 'ORIGINE ETRANGERE PONEY',
        },
        {
          race_code: 'ANBO',
          race_label: 'ANE BOURBONNAIS',
        },
        {
          race_code: 'MUPOI',
          race_label: 'MULE POITEVINE',
        },
        {
          race_code: 'MUPYR',
          race_label: 'MULET DES PYRENEES',
        },
        {
          race_code: '*AC*',
          race_label: '*ANGLO-ARABE COMPLEMENT*',
        },
        {
          race_code: 'ONCS',
          race_label: 'ORIGINE NON CONST. SELLE',
        },
        {
          race_code: 'ONCT',
          race_label: 'ORIGINE NON CONST. TRAIT',
        },
        {
          race_code: 'ONCP',
          race_label: 'ORIGINE NON CONST. PONEY',
        },
        {
          race_code: 'ONCA',
          race_label: 'ORIGINE NON CONST. ANE',
        },
        {
          race_code: 'ONCM',
          race_label: 'ORIGINE NON CONST. MULE',
        },
        {
          race_code: 'ONCB',
          race_label: 'ORIGINE NON CONST. BARDOT',
        },
        {
          race_code: 'ONCZ',
          race_label: 'ORIGINE NON CONST. ZEBRE',
        },
        {
          race_code: 'SFA',
          race_label: 'SELLE FRANCAIS SECTION A',
        },
        {
          race_code: 'SFB',
          race_label: 'SELLE FRANCAIS SECTION B',
        },
        {
          race_code: 'SFAQPSF AUTRE QUE PUR SANG',
          race_label: 'SF AUTRE QUE PUR SANG',
        },
        {
          race_code: 'WPB',
          race_label: 'DEMI SANG WELSH',
        },
        {
          race_code: 'CRIO',
          race_label: 'CRIOLLO',
        },
        {
          race_code: 'CSAN',
          race_label: 'ANGLO NORMAND',
        },
        {
          race_code: 'UKN',
          race_label: 'INCONNUE',
        },
      ],
      robe: [
        {
          robe_code: 'AL BRU',
          robe_label: 'ALEZAN BRULE',
        },
        {
          robe_code: 'AL CRL',
          robe_label: 'ALEZAN CRINS LAVES',
        },
        {
          robe_code: 'AL RUB',
          robe_label: 'ALEZAN RUBICAN',
        },
        {
          robe_code: 'AL FON',
          robe_label: 'ALEZAN FONCE',
        },
        {
          robe_code: 'AL AUB',
          robe_label: 'ALEZAN AUBERISE',
        },
        {
          robe_code: 'AL/GRI',
          robe_label: 'ALEZAN OU GRIS',
        },
        {
          robe_code: 'AL Z.',
          robe_label: 'ALEZAN ZAIN',
        },
        {
          robe_code: 'AL CUI',
          robe_label: 'ALEZAN CUIVRE',
        },
        {
          robe_code: 'AUBERE',
          robe_label: 'AUBERE',
        },
        {
          robe_code: 'AUB/GR',
          robe_label: 'AUBERE OU GRIS',
        },
        {
          robe_code: 'CAFLAI',
          robe_label: 'CAFE AU LAIT',
        },
        {
          robe_code: 'PALOM',
          robe_label: 'PALOMINO',
        },
        {
          robe_code: 'B/B BR',
          robe_label: 'BAI OU BAI BRUN',
        },
        {
          robe_code: 'BAI',
          robe_label: 'BAI',
        },
        {
          robe_code: 'BAI F.',
          robe_label: 'BAI FONCE',
        },
        {
          robe_code: 'BAI BR',
          robe_label: 'BAI BRUN',
        },
        {
          robe_code: 'BAI BF',
          robe_label: 'BAI BRUN FONCE',
        },
        {
          robe_code: 'BB/GRI',
          robe_label: 'BAI BRUN OU BAI',
        },
        {
          robe_code: 'BAI CL',
          robe_label: 'BAI CLAIR',
        },
        {
          robe_code: 'BAI R.',
          robe_label: 'BAI RUBICAN',
        },
        {
          robe_code: 'BAI Z.',
          robe_label: 'BAI ZAIN',
        },
        {
          robe_code: 'BLANC',
          robe_label: 'BLANC',
        },
        {
          robe_code: 'GRIS',
          robe_label: 'GRIS',
        },
        {
          robe_code: 'GR FON',
          robe_label: 'GRIS FONCE',
        },
        {
          robe_code: 'GR ROU',
          robe_label: 'GRIS ROUANNE',
        },
        {
          robe_code: 'GR VIN',
          robe_label: 'GRIS VINEUX',
        },
        {
          robe_code: 'GR TRU',
          robe_label: 'GRIS TRUITE',
        },
        {
          robe_code: 'ISABEL',
          robe_label: 'ISABELLE',
        },
        {
          robe_code: 'DUN',
          robe_label: 'DUN',
        },
        {
          robe_code: 'LOUVET',
          robe_label: 'LOUVET',
        },
        {
          robe_code: 'NOIR',
          robe_label: 'NOIR',
        },
        {
          robe_code: 'NOIRMT',
          robe_label: 'NOIR MAL TEINT',
        },
        {
          robe_code: 'PIE',
          robe_label: 'PIE',
        },
        {
          robe_code: 'PIALZ',
          robe_label: 'PIE ALEZAN',
        },
        {
          robe_code: 'PIROU',
          robe_label: 'PIE ROUAN',
        },
        {
          robe_code: 'PINOIR',
          robe_label: 'PIE NOIR',
        },
        {
          robe_code: 'PIGRIS',
          robe_label: 'PIE GRIS',
        },
        {
          robe_code: 'PIEBAI',
          robe_label: 'PIE BAI',
        },
        {
          robe_code: 'NOIRPI',
          robe_label: 'NOIR PIE',
        },
        {
          robe_code: 'BAIPIE',
          robe_label: 'BAI PIE',
        },
        {
          robe_code: 'ALZPIE',
          robe_label: 'ALEZAN PIE',
        },
        {
          robe_code: 'ROUAN',
          robe_label: 'ROUAN',
        },
        {
          robe_code: 'CAPMAU',
          robe_label: 'CAP DE MAURE',
        },
        {
          robe_code: 'SOURIS',
          robe_label: 'SOURIS',
        },
        {
          robe_code: 'APPALO',
          robe_label: 'APPALOOSA',
        },
        {
          robe_code: 'AL COM',
          robe_label: 'ALEZAN COMTOIS',
        },
        {
          robe_code: 'INDET',
          robe_label: 'INDETERMINE',
        },
        {
          robe_code: 'ALEZAN',
          robe_label: 'ALEZAN',
        },
        {
          robe_code: 'TACHE',
          robe_label: 'TACHETE',
        },
        {
          robe_code: 'LEOP',
          robe_label: 'LEOPARD',
        },
        {
          robe_code: 'CREME',
          robe_label: 'CREME',
        },
        {
          robe_code: 'ALZMEL',
          robe_label: 'ALEZAN MELANGE',
        },
        {
          robe_code: 'ALZCAP',
          robe_label: 'ALEZAN CAPE',
        },
        {
          robe_code: 'ALZTAC',
          robe_label: 'ALEZAN TACHETE',
        },
        {
          robe_code: 'BAICRL',
          robe_label: 'BAI CRINS LAVES',
        },
        {
          robe_code: 'BAIMEL',
          robe_label: 'BAI MELANGE',
        },
        {
          robe_code: 'BAICAP',
          robe_label: 'BAI CAPE',
        },
        {
          robe_code: 'BAITAC',
          robe_label: 'BAI TACHETE',
        },
        {
          robe_code: 'CHOCO',
          robe_label: 'CHOCOLAT',
        },
        {
          robe_code: 'CHOMEL',
          robe_label: 'CHOCOLAT MELANGE',
        },
        {
          robe_code: 'CHOPIE',
          robe_label: 'CHOCOLAT PIE',
        },
        {
          robe_code: 'CHOCAP',
          robe_label: 'CHOCOLAT CAPE',
        },
        {
          robe_code: 'CHOTAC',
          robe_label: 'CHOCOLAT TACHETE',
        },
        {
          robe_code: 'CREPIE',
          robe_label: 'CREME PIE',
        },
        {
          robe_code: 'CRECAP',
          robe_label: 'CREME CAPE',
        },
        {
          robe_code: 'CRETAC',
          robe_label: 'CREME TACHETE',
        },
        {
          robe_code: 'GR CL',
          robe_label: 'GRIS CLAIR',
        },
        {
          robe_code: 'GR MOU',
          robe_label: 'GRIS MOUCHETE',
        },
        {
          robe_code: 'GRIPIE',
          robe_label: 'GRIS PIE',
        },
        {
          robe_code: 'GRICAP',
          robe_label: 'GRIS CAPE',
        },
        {
          robe_code: 'GRITAC',
          robe_label: 'GRIS TACHETE',
        },
        {
          robe_code: 'ISAMEL',
          robe_label: 'ISABELLE MELANGE',
        },
        {
          robe_code: 'ISAPIE',
          robe_label: 'ISABELLE PIE',
        },
        {
          robe_code: 'ISACAP',
          robe_label: 'ISABELLE CAPE',
        },
        {
          robe_code: 'ISATAC',
          robe_label: 'ISABELLE TACHETE',
        },
        {
          robe_code: 'NOIPAN',
          robe_label: 'NOIR PANGARE',
        },
        {
          robe_code: 'NPAMEL',
          robe_label: 'NOIR PANGARE MELANGE',
        },
        {
          robe_code: 'NPAPIE',
          robe_label: 'NOIR PANGARE PIE',
        },
        {
          robe_code: 'NPATAC',
          robe_label: 'NOIR PANGARE TACHETE',
        },
        {
          robe_code: 'NOIMEL',
          robe_label: 'NOIR MELANGE',
        },
        {
          robe_code: 'MARMOR',
          robe_label: 'MARMORE',
        },
        {
          robe_code: 'NOICAP',
          robe_label: 'NOIR CAPE',
        },
        {
          robe_code: 'NOITAC',
          robe_label: 'NOIR TACHETE',
        },
        {
          robe_code: 'PALMEL',
          robe_label: 'PALOMINO MELANGE',
        },
        {
          robe_code: 'PALPIE',
          robe_label: 'PALOMINO PIE',
        },
        {
          robe_code: 'PALCAP',
          robe_label: 'PALOMINO CAPE',
        },
        {
          robe_code: 'PALTAC',
          robe_label: 'PALOMINO TACHETE',
        },
        {
          robe_code: 'SOUMEL',
          robe_label: 'SOURIS MELANGE',
        },
        {
          robe_code: 'SOUPIE',
          robe_label: 'SOURIS PIE',
        },
        {
          robe_code: 'SOUCAP',
          robe_label: 'SOURIS CAPE',
        },
        {
          robe_code: 'SOUTAC',
          robe_label: 'SOURIS TACHETE',
        },
        {
          robe_code: 'TACPIE',
          robe_label: 'TACHETE PIE',
        },
        {
          robe_code: 'TACCAP',
          robe_label: 'TACHETE CAPE',
        },
        {
          robe_code: 'GR FER',
          robe_label: 'GRIS FER',
        },
        {
          robe_code: 'GR TOU',
          robe_label: 'GRIS TOURTERELLE',
        },
        {
          robe_code: 'NPACAP',
          robe_label: 'NOIR PANGARE CAPE',
        },
        {
          robe_code: 'UKN',
          robe_label: 'INCONNUE',
        },
      ],
    }
  },
  computed: {
    //Permet en foncton de l'ID du cheval de sélectionner dans le tableaux horses uniquement le cheval concerné par la fiche
    //Permet l'affichage correcte de la race, du sexe et de la robe du cheval
    Horse() {
      const id = this.$route.params.id
      console.log(id)
      let objHorse = {}
      objHorse = this.horses[parseInt(id) - 1]

      const objSexe = this.sexe.find((a) => a.sexe_code === objHorse.horse_sexe)
      if (objSexe) {
        objHorse.horse_sexe = objSexe.sexe_label
      }

      const objRace = this.race.find((a) => a.race_code === objHorse.horse_race)
      if (objRace) {
        objHorse.horse_race = objRace.race_label
      }

      const objRobe = this.robe.find((a) => a.robe_code === objHorse.horse_robe)
      if (objRobe) {
        objHorse.horse_robe = objRobe.robe_label
      }

      return objHorse
    },
  },
  methods: {},
}
</script>
