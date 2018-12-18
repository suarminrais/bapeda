@extends('layouts.admin')

@section('content')
<div id="app" class="">

<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pembetulan</h2>
        <div class="clearfix"></div>
      </div>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('postpembetulan') }}">
	        @csrf
      <div class="x_content">
        <br>
        <div class="row">
          <div class="col-md-6">
            <table class="table table-basic">
              <tr>
                <div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-wp">No. pelayanan</label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input type="text" id="nama-wp" name="nopelayanan" value="<?php echo date('Y')?>.001.001" required="required" class="form-control col-md-7 col-xs-12">
	              </div>                          
	            </div>
              </tr>
            </table>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <fieldset>
                <div class="control-group">
                  <div class="controls">
                    <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                      <input name="tanggal" type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Tanggal Terima" aria-describedby="inputSuccess2Status3">
                      <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                    </div>
                  </div>
                </div>
              </fieldset>                           
              </div>
            </div>                        
          </div>
          <div class="col-md-6">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label for="userName" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama pemohon
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="pemohon" type="text" id="userName" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <select v-model="kec" name="kecematan" class="form-control">
					<option value="GANTARANG">GANTARANG</option>
					<option value="UJUNG BULU">UJUNG BULU</option>
					<option value="BT BAHARI">BT BAHARI</option>
					<option value="BT TIRO">BT TIRO</option>
					<option value="HERLANG">HERLANG</option>
					<option value="KAJANG">KAJANG</option>
					<option value="BULUKUMPA">BULUKUMPA</option>
					<option value="KINDANG">KINDANG</option>
					<option value="UJUNG LOE">UJUNG LOE</option>
					<option value="RILAU ALE">RILAU ALE</option>
	              </select>
	            </div>
	          </div>
              <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <select v-model="kel" name="kelurahan" class="form-control">

					<option v-if="gantarang" value="MATEKKO">MATEKKO</option>
					<option v-if="gantarang" value="BIALO">BIALO</option>
					<option v-if="gantarang" value="BT MACINNA">BT MACINNA</option>
					<option v-if="gantarang" value="BONTO RAJA">BONTO RAJA</option>
					<option v-if="gantarang" value="PADANG">PADANG</option>
					<option v-if="gantarang" value="DAMPANG">DAMPANG</option>
					<option v-if="gantarang" value="BT SUNGGUH">BT SUNGGUH</option>
					<option v-if="gantarang" value="PALAMBARAE">PALAMBARAE</option>
					<option v-if="gantarang" value="BT NYELENG">BT NYELENG</option>
					<option v-if="gantarang" value="GATTARENG">GATTARENG</option>
					<option v-if="gantarang" value="BTG MALEWANG">BTG MALEWANG</option>
					<option v-if="gantarang" value="PAENRE LOMPOE">PAENRE LOMPOE</option>
					<option v-if="gantarang" value="BUKIT HARAPAN">BUKIT HARAPAN</option>
					<option v-if="gantarang" value="POLEWALI">POLEWALI</option>
					<option v-if="gantarang" value="BONTO MASILA">BONTO MASILA</option>
					<option v-if="gantarang" value="BTG GANTARANG">BTG GANTARANG</option>
					<option v-if="gantarang" value="BAROMBONG">BAROMBONG</option>
					<option v-if="gantarang" value="BUKIT TINGGI">BUKIT TINGGI</option>
					<option v-if="gantarang" value="JALANJANG">JALANJANG</option>
					<option v-if="gantarang" value="MARIO RENNU">MARIO RENNU</option>
					<option v-if="gantarang" value="TACCORONG">TACCORONG</option>

					<option v-if='ujungBulu' value="TANAH KONGKONG">TANAH KONGKONG</option>
					<option v-if='ujungBulu' value="BENTENGE">BENTENGE</option>
					<option v-if='ujungBulu' value="TERANG-TERANG">TERANG-TERANG</option>
					<option v-if='ujungBulu' value="LOKA">LOKA</option>
					<option v-if='ujungBulu' value="CAILE">CAILE</option>
					<option v-if='ujungBulu' value="KALUMEME">KALUMEME</option>
					<option v-if='ujungBulu' value="ELA-ELA">ELA-ELA</option>
					<option v-if='ujungBulu' value="BINTARORE">BINTARORE</option>
					<option v-if='ujungBulu' value="KASIMPUREN">KASIMPUREN</option>

					<option v-if='btBahari' value="BIRA">BIRA</option>
					<option v-if='btBahari' value="DARUBIA">DARUBIA</option>
					<option v-if='btBahari' value="ARA">ARA</option>
					<option v-if='btBahari' value="TANAH LEMO">TANAH LEMO</option>
					<option v-if='btBahari' value="SAPOLOHE">SAPOLOHE</option>
					<option v-if='btBahari' value="LEMBANNA">LEMBANNA</option>
					<option v-if='btBahari' value="BENJALA">BENJALA</option>
					<option v-if='btBahari' value="TANAH BERU">TANAH BERU</option>

					<option v-if='btTiro' value="CARAMMING">CARAMMING</option>
					<option v-if='btTiro' value="TRI TIRO">TRI TIRO</option>
					<option v-if='btTiro' value="EKA TIRO">EKA TIRO</option>
					<option v-if='btTiro' value="DWI TIRO">DWI TIRO</option>
					<option v-if='btTiro' value="TAMALANREA">TAMALANREA</option>
					<option v-if='btTiro' value="BATANG">BATANG</option>
					<option v-if='btTiro' value="BT TANGNGA">BT TANGNGA</option>
					<option v-if='btTiro' value="BT BARUA">BT BARUA</option>
					<option v-if='btTiro' value="PAKU BALAHO">PAKU BALAHO</option>
					<option v-if='btTiro' value="BT BULAENG">BT BULAENG</option>
					<option v-if='btTiro' value="BONTOMARANNU">BONTOMARANNU</option>
					<option v-if='btTiro' value="BUHUNGBUNDANG">BUHUNGBUNDANG</option>
					<option v-if='btTiro' value="LAMANDA">LAMANDA</option>

					<option v-if='herlang' value="KARASSING">KARASSING</option>
					<option v-if='herlang' value="BORONG">BORONG</option>
					<option v-if='herlang' value="TANUNTUNG">TANUNTUNG</option>
					<option v-if='herlang' value="SINGA">SINGA</option>
					<option v-if='herlang' value="TOGONDENG">TOGONDENG</option>
					<option v-if='herlang' value="PATARO">PATARO</option>
					<option v-if='herlang' value="GUNTURU">GUNTURU</option>
					<option v-if='herlang' value="BT KAMASE">BT KAMASE</option>

					<option v-if='kajang' value="BT BIRAENG">BT BIRAENG</option>
					<option v-if='kajang' value="TAMBANGAN">TAMBANGAN</option>
					<option v-if='kajang' value="LEMBANNA">LEMBANNA</option>
					<option v-if='kajang' value="LEMBANG">LEMBANG</option>
					<option v-if='kajang' value="TANAH JAYA">TANAH JAYA</option>
					<option v-if='kajang' value="POSSI TANAH">POSSI TANAH</option>
					<option v-if='kajang' value="MATTOANGING">MATTOANGING</option>
					<option v-if='kajang' value="BT NILAMUNG">BT NILAMUNG</option>
					<option v-if='kajang' value="TANA TOWA">TANA TOWA</option>
					<option v-if='kajang' value="BT RANNU">BT RANNU</option>
					<option v-if='kajang' value="BONTO BAJI">BONTO BAJI</option>
					<option v-if='kajang' value="MALLELENG">MALLELENG</option>
					<option v-if='kajang' value="LAIKANG">LAIKANG</option>
					<option v-if='kajang' value="PATTIROANG">PATTIROANG</option>
					<option v-if='kajang' value="SAPANANG">SAPANANG</option>
					<option v-if='kajang' value="LOLISANG">LOLISANG</option>
					<option v-if='kajang' value="LEMBANG LOHE">LEMBANG LOHE</option>
					<option v-if='kajang' value="SANGKALA">SANGKALA</option>
					<option v-if='kajang' value="PANTAMA">PANTAMA</option>

					<option v-if='bulukumpa' value="SALASSAE">SALASSAE</option>
					<option v-if='bulukumpa' value="JOJJOLO">JOJJOLO</option>
					<option v-if='bulukumpa' value="BULO-BULO">BULO-BULO</option>
					<option v-if='bulukumpa' value="BONTO BULAENG">BONTO BULAENG</option>
					<option v-if='bulukumpa' value="SAPOBONTO">SAPOBONTO</option>
					<option v-if='bulukumpa' value="BALANGTARO">BALANGTARO</option>
					<option v-if='bulukumpa' value="KAMBUNO">KAMBUNO</option>
					<option v-if='bulukumpa' value="BARUGAE">BARUGAE</option>
					<option v-if='bulukumpa' value="TANETE">TANETE</option>
					<option v-if='bulukumpa' value="BONTO MINASA">BONTO MINASA</option>
					<option v-if='bulukumpa' value="TIBONA">TIBONA</option>
					<option v-if='bulukumpa' value="BALANGPESO">BALANGPESO</option>
					<option v-if='bulukumpa' value="BATU LOHE">BATU LOHE</option>
					<option v-if='bulukumpa' value="BALLASARAJA">BALLASARAJA</option>
					<option v-if='bulukumpa' value="JAWI-JAWI">JAWI-JAWI</option>
					<option v-if='bulukumpa' value="BONTO MANGIRING">BONTO MANGIRING</option>
					<option v-if='bulukumpa' value="BARUGA RIATTANG">BARUGA RIATTANG</option>

					<option v-if='kindang' value="BRG RAPPOA">BRG RAPPOA</option>
					<option v-if='kindang' value="ANRIHUA">ANRIHUA</option>
					<option v-if='kindang' value="GARUNTUNGAN">GARUNTUNGAN</option>
					<option v-if='kindang' value="BALIBO">BALIBO</option>
					<option v-if='kindang' value="MATTIROWALIE">MATTIROWALIE</option>
					<option v-if='kindang' value="BENTENG PALIOI">BENTENG PALIOI</option>
					<option v-if='kindang' value="KINDANG">KINDANG</option>
					<option v-if='kindang' value="TAMAONA">TAMAONA</option>
					<option v-if='kindang' value="OROGADING">OROGADING</option>
					<option v-if='kindang' value="SOPA">SOPA</option>
					<option v-if='kindang' value="SIPAENRE">SIPAENRE</option>
					<option v-if='kindang' value="KAHAYA">KAHAYA</option>

					<option v-if='ujgLoe' value="SALEMBA">SALEMBA</option>
					<option v-if='ujgLoe' value="DANNUANG">DANNUANG</option>
					<option v-if='ujgLoe' value="PADANGLOA">PADANGLOA</option>
					<option v-if='ujgLoe' value="SEPPANG">SEPPANG</option>
					<option v-if='ujgLoe' value="BIJAWANG">BIJAWANG</option>
					<option v-if='ujgLoe' value="BALLEANGING">BALLEANGING</option>
					<option v-if='ujgLoe' value="MANJALLING">MANJALLING</option>
					<option v-if='ujgLoe' value="GARANTA">GARANTA</option>
					<option v-if='ujgLoe' value="BALONG">BALONG</option>
					<option v-if='ujgLoe' value="LONRONG">LONRONG</option>
					<option v-if='ujgLoe' value="TAMATTO">TAMATTO</option>
					<option v-if='ujgLoe' value="MANYAMPA">MANYAMPA</option>
					<option v-if='ujgLoe' value="PACCARAMENGAN">PACCARAMENGAN</option>

					<option v-if='rilauAle' value="TANAH HARAPAN">TANAH HARAPAN</option>
					<option v-if='rilauAle' value="BONTO MANAI">BONTO MANAI</option>
					<option v-if='rilauAle' value="BULO LOHE">BULO LOHE</option>
					<option v-if='rilauAle' value="BATUKAROPA">BATUKAROPA</option>
					<option v-if='rilauAle' value="BONTO BANGUN">BONTO BANGUN</option>
					<option v-if='rilauAle' value="BAJIMINASA">BAJIMINASA</option>
					<option v-if='rilauAle' value="BONTO MATE'NE">BONTO MATE'NE</option>
					<option v-if='rilauAle' value="BONTO LOHE">BONTO LOHE</option>
					<option v-if='rilauAle' value="PALAMPANG">PALAMPANG</option>
					<option v-if='rilauAle' value="BT HARU">BT HARU</option>
					<option v-if='rilauAle' value="KARAMA">KARAMA</option>
					<option v-if='rilauAle' value="SWATANI">SWATANI</option>
					<option v-if='rilauAle' value="ANRANG">ANRANG</option>
					<option v-if='rilauAle' value="PANGALLOANG">PANGALLOANG</option>
					<option v-if='rilauAle' value="TOPANDA">TOPANDA</option>


	              </select>
	            </div>
	          </div>
              <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12">Blok :  <span class="required">*</span></label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	            	<input v-model="blok" required="required" maxlength="3" class="form-control col-md-7 col-xs-12" type="text" name="blok" id="blok">
	        	</div>
	          </div>
	          <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="anu">No Urut :  <span class="required">*</span>
	            </label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <input type="text" name="anu" maxlength="4" v-model="apa" required="required" class="form-control col-md-7 col-xs-12">
	            </div>
	          </div>
	          <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nop">NOP :  <span class="required">*</span>
	            </label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <input type="text" name="nop" v-model="base" required="required" class="form-control col-md-7 col-xs-12">
	            </div>
	          </div>
	          <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahunsppt">Alamat :  <span class="required">*</span>
	            </label>
	            <div class="col-md-6 col-sm-6 col-xs-12">
	              <input type="text" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
	            </div>
	          </div>
              <!-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah</label>
                <div class="col-md-6">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div> -->
              </div>
          </div>
        </div>
      <hr>
      <center><button type="submit" class="btn btn-round btn-primary">Kirim</button></center>
 	  </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('js')
<script src="{{asset('js/vue.js')}}"></script>
<script>
	let data = "73-02-";
	var app = new Vue({
		el: '#app',
		data: {
			kec_kode: data,
			anu:'000',
			kec:'000',
			kel:'000',
			itu:'000',
			blok:'000',
			apa:'0000',
			lihat: false,
		},
		computed: {
			gantarang: function(){
				if (this.kec=="GANTARANG") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			ujungBulu: function(){
				if (this.kec=="UJUNG BULU") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			btBahari: function(){
				if (this.kec=="BT BAHARI") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			btTiro: function(){
				if (this.kec=="BT TIRO") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			herlang: function(){
				if (this.kec=="HERLANG") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			kajang: function(){
				if (this.kec=="KAJANG") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			bulukumpa: function(){
				if (this.kec=="BULUKUMPA") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			kindang: function(){
				if (this.kec=="KINDANG") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			ujgLoe: function(){
				if (this.kec=="UJUNG LOE") this.lihat=true
				else this.lihat=false

				return this.lihat
			},
			rilauAle: function(){
				if (this.kec=="RILAU ALE") this.lihat=true
				else this.lihat=false

				return this.lihat
			},

		    base: function () {
		    	if (this.kec=="GANTARANG") this.anu="010" 
				else if (this.kec=="UJUNG BULU") this.anu="020"
				else if (this.kec=="BT BAHARI") this.anu="030" 
				else if (this.kec=="BT TIRO") this.anu="040"
				else if (this.kec=="HERLANG") this.anu="050"
				else if (this.kec=="KAJANG") this.anu="060"
				else if (this.kec=="BULUKUMPA") this.anu="070"
				else if (this.kec=="KINDANG") this.anu="080"
				else if (this.kec=="UJUNG LOE") this.anu="090"
				else if (this.kec=="RILAU ALE") this.anu="100"

				if (this.kel=="MATEKKO") this.itu="001" 
				else if (this.kel=="BIALO") this.itu="002"
				else if (this.kel=="BT MACINNA") this.itu="003" 
				else if (this.kel=="BONTO RAJA") this.itu="004"
				else if (this.kel=="PADANG") this.itu="005"
				else if (this.kel=="DAMPANG") this.itu="006"
				else if (this.kel=="BT SUNGGUH") this.itu="007"
				else if (this.kel=="PALAMBARAE") this.itu="008"
				else if (this.kel=="BT NYELENG") this.itu="009"
				else if (this.kel=="GATTARENG") this.itu="012"
				else if (this.kel=="BTG MALEWANG") this.itu="013"
				else if (this.kel=="PAENRE LOMPOE") this.itu="019" 
				else if (this.kel=="BUKIT HARAPAN") this.itu="020"
				else if (this.kel=="POLEWALI") this.itu="021"
				else if (this.kel=="BONTO MASILA") this.itu="022"
				else if (this.kel=="BTG GANTARANG") this.itu="024"
				else if (this.kel=="BAROMBONG") this.itu="025"
				else if (this.kel=="BUKIT TINGGI") this.itu="026"
				else if (this.kel=="JALANJANG") this.itu="027"
				else if (this.kel=="MARIO RENNU") this.itu="028"
				else if (this.kel=="TACCORONG") this.itu="029"

				else if (this.kel=="TANAH KONGKONG") this.itu="001"
				else if (this.kel=="BENTENGE") this.itu="002"
				else if (this.kel=="TERANG-TERANG") this.itu="003"
				else if (this.kel=="LOKA") this.itu="014"
				else if (this.kel=="CAILE") this.itu="015"
				else if (this.kel=="KALUMEME") this.itu="016"
				else if (this.kel=="ELA-ELA") this.itu="017"
				else if (this.kel=="BINTARORE") this.itu="019"
				else if (this.kel=="KASIMPUREN") this.itu="020"

				else if (this.kel=="BIRA") this.itu="001"
				else if (this.kel=="DARUBIA") this.itu="002"
				else if (this.kel=="ARA") this.itu="003"
				else if (this.kel=="TANAH LEMO") this.itu="004"
				else if (this.kel=="SAPOLOHE") this.itu="005"
				else if (this.kel=="LEMBANNA") this.itu="006"
				else if (this.kel=="BENJALA") this.itu="007"
				else if (this.kel=="TANAH BERU") this.itu="008"

				else if (this.kel=="CARAMMING") this.itu="001"
				else if (this.kel=="TRI TIRO") this.itu="002"
				else if (this.kel=="EKA TIRO") this.itu="003"
				else if (this.kel=="DWI TIRO") this.itu="004"
				else if (this.kel=="TAMALANREA") this.itu="005"
				else if (this.kel=="BATANG") this.itu="006"
				else if (this.kel=="BT TANGNGA") this.itu="007"
				else if (this.kel=="BT BARUA") this.itu="008"
				else if (this.kel=="PAKU BALAHO") this.itu="009"
				else if (this.kel=="BT BULAENG") this.itu="010"
				else if (this.kel=="BONTOMARANNU") this.itu="011"
				else if (this.kel=="BUHUNGBUNDANG") this.itu="012"
				else if (this.kel=="LAMANDA") this.itu="013"

				else if (this.kel=="KARASSING") this.itu="001"
				else if (this.kel=="BORONG") this.itu="002"
				else if (this.kel=="TANUNTUNG") this.itu="003"
				else if (this.kel=="SINGA") this.itu="004"
				else if (this.kel=="TOGONDENG") this.itu="005"
				else if (this.kel=="PATARO") this.itu="006"
				else if (this.kel=="GUNTURU") this.itu="007"
				else if (this.kel=="BT KAMASE") this.itu="008"

				else if (this.kel=="BT BIRAENG") this.itu="001"
				else if (this.kel=="TAMBANGAN") this.itu="002"
				else if (this.kel=="LEMBANNA") this.itu="003"
				else if (this.kel=="LEMBANG") this.itu="004"
				else if (this.kel=="TANAH JAYA") this.itu="005"
				else if (this.kel=="POSSI TANAH") this.itu="006"
				else if (this.kel=="MATTOANGING") this.itu="007"
				else if (this.kel=="BT NILAMUNG") this.itu="008"
				else if (this.kel=="TANA TOWA") this.itu="009"
				else if (this.kel=="BT RANNU") this.itu="010"
				else if (this.kel=="BONTO BAJI") this.itu="011"
				else if (this.kel=="MALLELENG") this.itu="012"
				else if (this.kel=="LAIKANG") this.itu="013"
				else if (this.kel=="PATTIROANG") this.itu="014"
				else if (this.kel=="SAPANANG") this.itu="015"
				else if (this.kel=="LOLISANG") this.itu="016"
				else if (this.kel=="LEMBANG") this.itu="017"
				else if (this.kel=="SANGKALA") this.itu="018"
				else if (this.kel=="PANTAMA") this.itu="019"

				else if (this.kel=="SALASSAE") this.itu="009"
				else if (this.kel=="JOJJOLO") this.itu="010"
				else if (this.kel=="BULO-BULO") this.itu="011"
				else if (this.kel=="BONTO BULAENG") this.itu="012"
				else if (this.kel=="SAPOBONTO") this.itu="014"
				else if (this.kel=="BALANGTARO") this.itu="015"
				else if (this.kel=="KAMBUNO") this.itu="016"
				else if (this.kel=="BARUGAE") this.itu="017"
				else if (this.kel=="TANETE") this.itu="018"
				else if (this.kel=="BONTO MINASA") this.itu="019"
				else if (this.kel=="TIBONA") this.itu="020"
				else if (this.kel=="BALANGPESO") this.itu="023"
				else if (this.kel=="BATU LOHE") this.itu="024"
				else if (this.kel=="BALLASARAJA") this.itu="026"
				else if (this.kel=="JAWI-JAWI") this.itu="027"
				else if (this.kel=="BONTO MANGIRING") this.itu="028"
				else if (this.kel=="BARUGA RIATTANG") this.itu="029"

				else if (this.kel=="BRG RAPPOA") this.itu="001"
				else if (this.kel=="ANRIHUA") this.itu="002"
				else if (this.kel=="GARUNTUNGAN") this.itu="003"
				else if (this.kel=="BALIBO") this.itu="004"
				else if (this.kel=="MATTIROWALIE") this.itu="005"
				else if (this.kel=="BENTENG PALIOI") this.itu="006"
				else if (this.kel=="KINDANG") this.itu="007"
				else if (this.kel=="TAMAONA") this.itu="008"
				else if (this.kel=="OROGADING") this.itu="009"
				else if (this.kel=="SOPA") this.itu="010"
				else if (this.kel=="SIPAENRE") this.itu="011"
				else if (this.kel=="KAHAYA") this.itu="012"

				else if (this.kel=="SALEMBA") this.itu="001"
				else if (this.kel=="DANNUANG") this.itu="002"
				else if (this.kel=="PADANGLOA") this.itu="003"
				else if (this.kel=="SEPPANG") this.itu="004"
				else if (this.kel=="BIJAWANG") this.itu="005"
				else if (this.kel=="BALLEANGING") this.itu="006"
				else if (this.kel=="MANJALLING") this.itu="007"
				else if (this.kel=="GARANTA") this.itu="008"
				else if (this.kel=="BALONG") this.itu="009"
				else if (this.kel=="LONRONG") this.itu="010"
				else if (this.kel=="TAMATTO") this.itu="011"
				else if (this.kel=="MANYAMPA") this.itu="012"
				else if (this.kel=="PACCARAMENGAN") this.itu="013"

				else if (this.kel=="TANAH HARAPAN") this.itu="001"
				else if (this.kel=="BONTO MANAI") this.itu="002"
				else if (this.kel=="BULO LOHE") this.itu="003"
				else if (this.kel=="BATUKAROPA") this.itu="004"
				else if (this.kel=="BONTO BANGUN") this.itu="005"
				else if (this.kel=="BAJIMINASA") this.itu="006"
				else if (this.kel=="BONTO MATE'NE") this.itu="007"
				else if (this.kel=="BONTO LOHE") this.itu="008"
				else if (this.kel=="PALAMPANG") this.itu="009"
				else if (this.kel=="BT HARU") this.itu="010"
				else if (this.kel=="KARAMA") this.itu="011"
				else if (this.kel=="SWATANI") this.itu="012"
				else if (this.kel=="ANRANG") this.itu="013"
				else if (this.kel=="PANGALLOANG") this.itu="014"
				else if (this.kel=="TOPANDA") this.itu="015"

		      return this.kec_kode + this.anu + '-' + this.itu + '-' + this.blok + '-' + this.apa + '-' + '0'
		    }
		}
	})
</script>	
@stop