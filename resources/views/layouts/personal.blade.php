@extends('layouts.app')

@section('content')

<span id="paramStudentDetails" align="right" style="float: right"> {{ Auth::user()->name }}</span></div>
<div id="page-content-box">
    <div id="content">
        <div id="sectionData">

            <div id="tabbedpane" class="tabwidget ui-tabs ui-widget ui-widget-content ui-corner-all"><ul id="tabList" class="tabnav ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#a">Personal Details</a>
            </li>
            <li class="ui-state-default ui-corner-top"><a href="{{ route('file.upload') }}">Documents</a></li>
        </ul>
        <div id="paramDisplayErrorMessage" class="ui-state-error ui-corner-all" style="margin-top: 5px; display: none;">
            <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span><span id="paramErrorMessage">null</span></div><div id="paramDisplayInfoMessage" class="ui-state-highlight ui-corner-all" style="margin-top: 5px; display: block;"><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span><span id="paramInfoMessage">Edit personal information. Kindly contact your school to update your parents' or gurdians' details</span></div>

            <div id="sectionData1"><div id="a" class="tabcontent active ui-tabs-panel ui-widget-content ui-corner-bottom"><form name="frmDetails" id="frmDetails" method="post" action="Details.html"><input type="hidden" name="Command" value="SAVE"><input type="hidden" name="inpUserType" value="ALUMNO"><table class="table"><tbody><tr><td colspan="4" style="font-weight: bold; text-align: center; background-color: #DDDDDD; width: 380px;"> Personal Details </td></tr><tr><td class="subhead" width="25%">ID/Passport Number: <span class="req">*</span></td><td width="25%"><input name="inpIdentityNumber" size="50"  class="required"  value="" maxlength="50" tabindex="1"></td>
                <td class="subhead" width="25%"> Religion: <span class="req">*</span></td><td width="25%"><select name="inpComboReligion" id="reportComboReligion" class="required" tabindex="2"><option value=""></option>
                    <option value="15">African Inland Church</option>
<option value="19">Agnostic</option>
<option value="23">Agnosticism</option>
<option value="6">Anglican</option>
<option value="12">Baptist</option>
<option value="4">Buddhist</option>
<option value="0">Catholic</option>
<option value="21">Christian</option>
<option value="11">Friends</option>
<option value="3">Hindu</option>
<option value="20">Jain</option>
<option value="10">Jehovah Witness</option>
<option value="22">Jewish</option>
<option value="16">Lutheran</option>
<option value="13">Methodist</option>
<option value="2">Muslim</option>
<option value="5">Orthodox</option>
<option value="8">Pentecostal/Evangelicals</option>
<option value="7">Presbyterian</option>
<option value="1">Protestant</option>
<option value="9">SDA</option>
<option value="14">Salvation Army</option>
<option value="18">Sikh</option>


</select></td></tr><tr><td class="subhead" width="25%">Postal Address: </td><td width="25%"><input name="inpPostalAddress"  value="" maxlength="50" tabindex="3"></td><td class="subhead" width="25%">Postal Code:</td><td width="25%"><select name="inpPostalCode"  id="reportComboPostalCode" tabindex="4"><option value=""></option>
<option value="40101">AHERO - 40101</option>
<option value="30101">AINABKOI - 30101</option>
<option value="40139">AKALA - 40139</option>
<option value="50244">AMAGORO - 50244</option>
<option value="20424">AMALO (FORMERLY OLOOMIRANI) - 20424</option>
<option value="50403">AMUKURA - 50403</option>
<option value="40309">ASUMBI - 40309</option>
<option value="00204">ATHI RIVER - 00204</option>
<option value="40122">AWASI - 40122</option>
<option value="20113">BAHATI - 20113</option>
<option value="80101">BAMBURI - 80101</option>
<option value="50316">BANJA - 50316</option>
<option value="20601">BARAGOI - 20601</option>
<option value="30306">BARATON - 30306</option>
<option value="10302">BARICHO - 10302</option>
<option value="01101">BISSEL - 01101</option>
<option value="50206">BOKOLI - 50206</option>
<option value="20400">BOMET - 20400</option>
<option value="20101">BONDENI - 20101</option>
<option value="40601">BONDO - 40601</option>
<option value="50137">BOOKER - 50137</option>
<option value="40620">BORO - 40620</option>
<option value="50245">BRIGADIER - 50245</option>
<option value="50105">BUKURA - 50105</option>
<option value="50109">BULIMBO - 50109</option>
<option value="50404">BUMALA - 50404</option>
<option value="50200">BUNGOMA - 50200</option>
<option value="70104">BURA TANA - 70104</option>
<option value="30102">BURNT FOREST - 30102</option>
<option value="50400">BUSIA - 50400</option>
<option value="50101">BUTERE - 50101</option>
<option value="50405">BUTULA - 50405</option>
<option value="50210">BUYOFU - 50210</option>
<option value="50302">CHAMAKANGA - 50302</option>
<option value="80102">CHANGAMWE - 80102</option>
<option value="50317">CHAVAKALI - 50317</option>
<option value="30706">CHEBIEMIT - 30706</option>
<option value="20215">CHEBORGE - 20215</option>
<option value="20401">CHEBUNYO - 20401</option>
<option value="20222">CHEMAMUL - 20222</option>
<option value="20407">CHEMANER - 20407</option>
<option value="40116">CHEMELIL - 40116</option>
<option value="30605">CHEPARERIA - 30605</option>
<option value="30133">CHEPKOILEL - 30133</option>
<option value="30129">CHEPKORIO - 30129</option>
<option value="50201">CHEPTAIS - 50201</option>
<option value="20217">CHESINENDET - 20217</option>
<option value="60410">CHIAKANYINGA - 60410</option>
<option value="60409">CHIAKARIGA - 60409</option>
<option value="60401">CHOGORIA - 60401</option>
<option value="60400">CHUKA - 60400</option>
<option value="90147">CHUMVI - 90147</option>
<option value="80314">CHUMVINI - 80314</option>
<option value="50202">CHWELE - 50202</option>
<option value="80103">COAST GEN.HOSTIPAL - 80103</option>
<option value="70103">DADAAB - 70103</option>
<option value="40112">DAGO - 40112</option>
<option value="40117">DARAJA MBILI - 40117</option>
<option value="90145">DAYSTAR - 90145</option>
<option value="80401">DIANI BEACH - 80401</option>
<option value="80104">DOCKS - 80104</option>
<option value="10401">DOLDOL - 10401</option>
<option value="01027">DONYOSABUK - 01027</option>
<option value="20115">EGERTON - 20115</option>
<option value="90139">EKALAKALA - 90139</option>
<option value="20102">ELBURGON - 20102</option>
<option value="20103">ELDAMA RAVINE - 20103</option>
<option value="30100">ELDORET - 30100</option>
<option value="70301">ELWAK - 70301</option>
<option value="90121">EMALI - 90121</option>
<option value="60100">EMBU - 60100</option>
<option value="50314">EMUHAYA - 50314</option>
<option value="10107">ENDARASHA - 10107</option>
<option value="30201">ENDEBESS - 30201</option>
<option value="40208">ETAGO - 40208</option>
<option value="80501">FAZA - 80501</option>
<option value="20209">FORT TERNAN - 20209</option>
<option value="50406">FUNYULA - 50406</option>
<option value="10210">GACHARAGE-INI - 10210</option>
<option value="60209">GAITU - 60209</option>
<option value="10109">GAKERE ROAD - 10109</option>
<option value="10111">GAKINDU - 10111</option>
<option value="10239">GAKUNGU - 10239</option>
<option value="50318">GAMBOGI - 50318</option>
<option value="80205">GANZE - 80205</option>
<option value="60301">GARBA TULLA - 60301</option>
<option value="70100">GARISSA - 70100</option>
<option value="80201">GARSEN - 80201</option>
<option value="00240">GATHUGU - 00240</option>
<option value="10114">GATITU - 10114</option>
<option value="01028">GATUKUYU - 01028</option>
<option value="01030">GATUNDU - 01030</option>
<option value="60404">GATUNGA - 60404</option>
<option value="01013">GATURA - 01013</option>
<option value="80208">GEDE - 80208</option>
<option value="40503">GESIMA - 40503</option>
<option value="40201">GESUSU - 40201</option>
<option value="10108">GIAKANJA - 10108</option>
<option value="10213">GIKOE - 10213</option>
<option value="20116">GILGIL - 20116</option>
<option value="50304">GISAMBAI - 50304</option>
<option value="60212">GITEMENE - 60212</option>
<option value="60205">GITHONGO - 60205</option>
<option value="00216">GITHUNGURI - 00216</option>
<option value="01003">GITUAMBA - 01003</option>
<option value="10209">GITUGI - 10209</option>
<option value="80206">GONGONI - 80206</option>
<option value="70202">GRIFTU - 70202</option>
<option value="70201">HABASWEIN - 70201</option>
<option value="50312">HAMISI - 50312</option>
<option value="40640">HAWINGA - 40640</option>
<option value="70101">HOLA - 70101</option>
<option value="40300">HOMA BAY - 40300</option>
<option value="30109">HURUMA - 30109</option>
<option value="40209">IGARE - 40209</option>
<option value="60402">IGOJI - 60402</option>
<option value="20307">IGWAMITI - 20307</option>
<option value="90120">IIANI - 90120</option>
<option value="90135">IKALAASA - 90135</option>
<option value="40501">IKONGE - 40501</option>
<option value="90207">IKUTHA - 90207</option>
<option value="60405">IKUU - 60405</option>
<option value="60102">ISHIARA - 60102</option>
<option value="40414">ISIBANIA - 40414</option>
<option value="60300">ISIOLO - 60300</option>
<option value="30700">ITEN - 30700</option>
<option value="01015">ITHANGA - 01015</option>
<option value="20157">KABARAK - 20157</option>
<option value="30400">KABARNET - 30400</option>
<option value="30401">KABARTONJO - 30401</option>
<option value="90205">KABATI - 90205</option>
<option value="20114">KABAZI - 20114</option>
<option value="20201">KABIANGA - 20201</option>
<option value="30303">KABIYET - 30303</option>
<option value="30601">KACHELIBA - 30601</option>
<option value="40223">KADONGO - 40223</option>
<option value="10306">KAGIO - 10306</option>
<option value="10307">KAGUMO - 10307</option>
<option value="01033">KAGUNDU-INI - 01033</option>
<option value="00223">KAGWE - 00223</option>
<option value="20304">KAHEHO - 20304</option>
<option value="10206">KAHUHIA - 10206</option>
<option value="10201">KAHURO - 10201</option>
<option value="10214">KAHUTI - 10214</option>
<option value="50305">KAIMOSI - 50305</option>
<option value="01100">KAJIADO - 01100</option>
<option value="50100">KAKAMEGA - 50100</option>
<option value="30501">KAKUMA - 30501</option>
<option value="50115">KAKUNGA - 50115</option>
<option value="90122">KALAMBA - 90122</option>
<option value="01001">KALIMONI - 01001</option>
<option value="30502">KALOKOL - 30502</option>
<option value="80105">KALOLENI - 80105</option>
<option value="20134">KAMARA - 20134</option>
<option value="50116">KAMBIRI - 50116</option>
<option value="10226">KAMBITI - 10226</option>
<option value="30406">KAMPI-YA-SAMAKI - 30406</option>
<option value="50216">KAMUKUYWA - 50216</option>
<option value="50408">KAMURIAI - 50408</option>
<option value="90403">KAMUWONGO - 90403</option>
<option value="01034">KANDARA - 01034</option>
<option value="40304">KANDIEGE - 40304</option>
<option value="10218">KANGARI - 10218</option>
<option value="10202">KANGEMA - 10202</option>
<option value="90115">KANGUNDO - 90115</option>
<option value="60118">KANJA - 60118</option>
<option value="01004">KANJUKU - 01004</option>
<option value="60206">KANYAKINE - 60206</option>
<option value="30304">KAPCHENO - 30304</option>
<option value="30204">KAPCHEROP - 30204</option>
<option value="30600">KAPENGURIA - 30600</option>
<option value="20214">KAPKATET - 20214</option>
<option value="30300">KAPSABET - 30300</option>
<option value="30208">KAPSARA - 30208</option>
<option value="20211">KAPSOIT - 20211</option>
<option value="50203">KAPSOKWONY - 50203</option>
<option value="30705">KAPSOWAR - 30705</option>
<option value="30114">KAPTAGAT - 30114</option>
<option value="30701">KAPTARAKWA - 30701</option>
<option value="60105">KARABA - 60105</option>
<option value="20328">KARANDI - 20328</option>
<option value="10101">KARATINA - 10101</option>
<option value="40401">KARUNGU - 40401</option>
<option value="00219">KARURI - 00219</option>
<option value="60117">KARURUMO - 60117</option>
<option value="90123">KASIKEU - 90123</option>
<option value="90106">KATANGI - 90106</option>
<option value="90105">KATHIANI - 90105</option>
<option value="90302">KATHONZWENI - 90302</option>
<option value="60406">KATHWANA - 60406</option>
<option value="40118">KATITO - 40118</option>
<option value="90107">KAVIANI - 90107</option>
<option value="40506">KEBIRIGO - 40506</option>
<option value="20220">KEDOWA - 20220</option>
<option value="20501">KEEKOROK - 20501</option>
<option value="40413">KEHANCHA - 40413</option>
<option value="40301">KENDU BAY - 40301</option>
<option value="80122">KENGELENI - 80122</option>
<option value="01020">KENOL - 01020</option>
<option value="40211">KENYENYA - 40211</option>
<option value="20200">KERICHO - 20200</option>
<option value="20131">KERINGET - 20131</option>
<option value="40202">KEROKA - 40202</option>
<option value="10300">KERUGOYA - 10300</option>
<option value="30215">KESOGON - 30215</option>
<option value="40212">KEUMBU - 40212</option>
<option value="50104">KHAYEGA - 50104</option>
<option value="50135">KHWISERO - 50135</option>
<option value="10122">KIAMARIGA - 10122</option>
<option value="00900">KIAMBU - 00900</option>
<option value="10309">KIAMUTUGU - 10309</option>
<option value="60602">KIANJAI - 60602</option>
<option value="60122">KIANJOKOMA - 60122</option>
<option value="10301">KIANYAGA - 10301</option>
<option value="60201">KIBIRICHIA - 60201</option>
<option value="90137">KIBWEZI - 90137</option>
<option value="10102">KIGANJO - 10102</option>
<option value="10203">KIGUMO - 10203</option>
<option value="10207">KIHOYA - 10207</option>
<option value="60207">KIIRUA - 60207</option>
<option value="00220">KIJABE - 00220</option>
<option value="90125">KIKIMA - 90125</option>
<option value="80410">KIKONENI - 80410</option>
<option value="00902">KIKUYU - 00902</option>
<option value="90305">KILALA - 90305</option>
<option value="40700">KILGORIS - 40700</option>
<option value="80108">KILIFI - 80108</option>
<option value="80107">KILINDINI - 80107</option>
<option value="50315">KILINGILI - 50315</option>
<option value="10140">KIMATHI WAY - 10140</option>
<option value="10310">KIMBIMBI - 10310</option>
<option value="50204">KIMILILI - 50204</option>
<option value="30209">KIMININI - 30209</option>
<option value="20225">KIMULOT - 20225</option>
<option value="30128">KIMWARER - 30128</option>
<option value="20320">KINAMBA - 20320</option>
<option value="80405">KINANGO - 80405</option>
<option value="00227">KINARI - 00227</option>
<option value="01031">KINDARUMA - 01031</option>
<option value="60216">KINORU - 60216</option>
<option value="60211">KIONYO - 60211</option>
<option value="30103">KIPKABUS - 30103</option>
<option value="50241">KIPKARREN RIVER - 50241</option>
<option value="20202">KIPKELION - 20202</option>
<option value="20133">KIPTANGWANYI - 20133</option>
<option value="20213">KIPTERE - 20213</option>
<option value="20208">KIPTUGUMO - 20208</option>
<option value="10204">KIRIAINI - 10204</option>
<option value="60113">KIRITIRI - 60113</option>
<option value="50313">KIRITU - 50313</option>
<option value="01018">KIRWARA - 01018</option>
<option value="90204">KISASI - 90204</option>
<option value="00206">KISERIAN - 00206</option>
<option value="40200">KISII - 40200</option>
<option value="40100">KISUMU - 40100</option>
<option value="30200">KITALE - 30200</option>
<option value="00241">KITENGELA - 00241</option>
<option value="90124">KITHIMANI - 90124</option>
<option value="60114">KITHIMU - 60114</option>
<option value="90144">KITHYOKO - 90144</option>
<option value="90303">KITISE - 90303</option>
<option value="90200">KITUI - 90200</option>
<option value="90111">KIVUNGA - 90111</option>
<option value="30305">KOBUJOI - 30305</option>
<option value="90108">KOLA - 90108</option>
<option value="40102">KOMBEWA - 40102</option>
<option value="40103">KONDELE - 40103</option>
<option value="10234">KORA - 10234</option>
<option value="40104">KORU - 40104</option>
<option value="40332">KOSELE - 40332</option>
<option value="50117">KOYONZO - 50117</option>
<option value="60125">KUBU KUBU - 60125</option>
<option value="10304">KUTUS - 10304</option>
<option value="80403">KWALE - 80403</option>
<option value="90220">KYATUNE - 90220</option>
<option value="90209">KYENI - 90209</option>
<option value="90401">KYUSO - 90401</option>
<option value="60601">LAARE - 60601</option>
<option value="20330">LAIKIPIA CAMPUS - 20330</option>
<option value="60502">LAISAMIS - 60502</option>
<option value="80500">LAMU - 80500</option>
<option value="20112">LANET - 20112</option>
<option value="30112">LANGAS - 30112</option>
<option value="30302">LESSOS - 30302</option>
<option value="80110">LIKONI - 80110</option>
<option value="00217">LIMURU - 00217</option>
<option value="20210">LITEIN - 20210</option>
<option value="30500">LODWAR - 30500</option>
<option value="00209">LOITOKITOK - 00209</option>
<option value="60501">LOIYANGALANI - 60501</option>
<option value="30503">LOKICHOGGIO - 30503</option>
<option value="30504">LOKITAUNG - 30504</option>
<option value="40701">LOLGORIAN - 40701</option>
<option value="20203">LONDIANI - 20203</option>
<option value="20402">LONGISA - 20402</option>
<option value="50307">LUANDA - 50307</option>
<option value="50240">LUANDETI - 50240</option>
<option value="50118">LUBAO - 50118</option>
<option value="50108">LUGARI - 50108</option>
<option value="50218">LUGULU - 50218</option>
<option value="40623">LUHANO - 40623</option>
<option value="50230">LUKUSI - 50230</option>
<option value="50242">LUMAKANDA - 50242</option>
<option value="80402">LUNGA LUNGA - 80402</option>
<option value="50119">LUNZA - 50119</option>
<option value="50220">LWAKHAKHA - 50220</option>
<option value="20147">MAAI MAHIU - 20147</option>
<option value="50235">MABUSI - 50235</option>
<option value="90100">MACHAKOS - 90100</option>
<option value="01002">MADARAKA - 01002</option>
<option value="40613">MADIANY - 40613</option>
<option value="80207">MADINA - 80207</option>
<option value="00205">MAGADI - 00205</option>
<option value="40516">MAGENA - 40516</option>
<option value="50325">MAGO - 50325</option>
<option value="40507">MAGOMBO - 40507</option>
<option value="60403">MAGUMONI - 60403</option>
<option value="40307">MAGUNGA - 40307</option>
<option value="60407">MAGUTUNI - 60407</option>
<option value="40508">MAGWAGWA - 40508</option>
<option value="90138">MAKINDU - 90138</option>
<option value="90300">MAKUENI - 90300</option>
<option value="50209">MALAKISI - 50209</option>
<option value="50103">MALAVA - 50103</option>
<option value="80200">MALINDI - 80200</option>
<option value="70300">MANDERA - 70300</option>
<option value="60101">MANYATTA - 60101</option>
<option value="50300">MARAGOLI - 50300</option>
<option value="10205">MARAGUA - 10205</option>
<option value="20600">MARALAL - 20600</option>
<option value="80113">MARIAKANI - 80113</option>
<option value="30403">MARIGAT - 30403</option>
<option value="60408">MARIMA - 60408</option>
<option value="60215">MARIMANTI - 60215</option>
<option value="20322">MARMANET - 20322</option>
<option value="60500">MARSABIT - 60500</option>
<option value="70105">MASALANI - 70105</option>
<option value="40105">MASENO - 40105</option>
<option value="01103">MASHURU - 01103</option>
<option value="90101">MASII - 90101</option>
<option value="90141">MASINGA - 90141</option>
<option value="00221">MATATHIA - 00221</option>
<option value="90140">MATILIKU - 90140</option>
<option value="80406">MATUGA - 80406</option>
<option value="30205">MATUNDA - 30205</option>
<option value="90119">MATUU - 90119</option>
<option value="60600">MAUA - 60600</option>
<option value="80317">MAUNGU - 80317</option>
<option value="90304">MAVINDINI - 90304</option>
<option value="40310">MAWEGO - 40310</option>
<option value="80114">MAZERAS - 80114</option>
<option value="10233">MBIRI - 10233</option>
<option value="40305">MBITA - 40305</option>
<option value="90214">MBITINI - 90214</option>
<option value="90110">MBIUNI - 90110</option>
<option value="90127">MBUMBUNI - 90127</option>
<option value="40123">MEGA CITY - 40123</option>
<option value="20104">MENENGAI - 20104</option>
<option value="60303">MERTI - 60303</option>
<option value="60200">MERU - 60200</option>
<option value="40319">MFANGANO - 40319</option>
<option value="80313">MGAMBONYI - 80313</option>
<option value="80306">MGANGE - 80306</option>
<option value="60604">MIATHENE - 60604</option>
<option value="90402">MIGWANI - 90402</option>
<option value="20301">MIHARATI - 20301</option>
<option value="60607">MIKINDURI - 60607</option>
<option value="50138">MILIMANI - 50138</option>
<option value="20123">MILTON SIDING - 20123</option>
<option value="20124">MIRANGINE - 20124</option>
<option value="40320">MIROGI - 40320</option>
<option value="50207">MISIKHU - 50207</option>
<option value="90104">MITABONI - 90104</option>
<option value="60204">MITUNGUU - 60204</option>
<option value="90112">MIU - 90112</option>
<option value="80106">MKOMANI - 80106</option>
<option value="00620">MOBIL PLAZA - 00620</option>
<option value="70102">MODO GASHE - 70102</option>
<option value="20403">MOGOGOSIEK - 20403</option>
<option value="20105">MOGOTIO - 20105</option>
<option value="80115">MOI AIRPORT - 80115</option>
<option value="30107">MOI UNIVERSITY - 30107</option>
<option value="30104">MOIBEN - 30104</option>
<option value="30202">MOIS BRIDGE - 30202</option>
<option value="40510">MOKOMONI - 40510</option>
<option value="80502">MOKOWE - 80502</option>
<option value="20106">MOLO - 20106</option>
<option value="80100">MOMBASA G.P.O - 80100</option>
<option value="30307">MOSORIOT - 30307</option>
<option value="60700">MOYALE - 60700</option>
<option value="80503">MPEKETONI - 80503</option>
<option value="80404">MSAMBWENI - 80404</option>
<option value="90128">MTITU ANDEI - 90128</option>
<option value="80111">MTONGWE - 80111</option>
<option value="80117">MTOPANGA - 80117</option>
<option value="80109">MTWAPA - 80109</option>
<option value="50423">MUBWAYO - 50423</option>
<option value="10129">MUGUNDA - 10129</option>
<option value="40107">MUHORONI - 40107</option>
<option value="40409">MUHURU BAY - 40409</option>
<option value="50225">MUKHE - 50225</option>
<option value="10103">MUKURWEINI - 10103</option>
<option value="50102">MUMIAS - 50102</option>
<option value="10200">MURANGA - 10200</option>
<option value="50125">MUSANDA - 50125</option>
<option value="90211">MUTHA - 90211</option>
<option value="60605">MUTHARA - 60605</option>
<option value="90113">MUTHETHENI - 90113</option>
<option value="90117">MUTITUNI - 90117</option>
<option value="90201">MUTOMO - 90201</option>
<option value="40628">MUTUMBU - 40628</option>
<option value="90102">MWALA - 90102</option>
<option value="80305">MWATATE - 80305</option>
<option value="10104">MWEIGA - 10104</option>
<option value="90400">MWINGI - 90400</option>
<option value="50226">MYANGA - 50226</option>
<option value="20504">NAIRAGE ENKARE - 20504</option>
<option value="00515">NAIROBI-BURUBURU - 00515</option>
<option value="00200">NAIROBI-CITY SQUARE - 00200</option>
<option value="00516">NAIROBI-DANDORA - 00516</option>
<option value="00610">NAIROBI-EASTLEIGH - 00610</option>
<option value="00521" selected="">1234-00100</option>
<option value="00500">NAIROBI-ENTERPRISE ROAD - 00500</option>
<option value="00100">NAIROBI-G.P.O NAIROBI - 00100</option>
<option value="00601">NAIROBI-GIGIRI - 00601</option>
<option value="00501">NAIROBI-J.K.I. AIRPORT - 00501</option>
<option value="00101">NAIROBI-JAMIA - 00101</option>
<option value="00607">NAIROBI-KAMITI - 00607</option>
<option value="00625">NAIROBI-KANGEMI - 00625</option>
<option value="00502">NAIROBI-KAREN - 00502</option>
<option value="00518">NAIROBI-KAYOLE - 00518</option>
<option value="00202">NAIROBI-KENYATTA N.HOSPITAL - 00202</option>
<option value="00609">NAIROBI-KENYATTA UNIVERSITY - 00609</option>
<option value="00509">NAIROBI-LANGATA - 00509</option>
<option value="00603">NAIROBI-LAVINGTON - 00603</option>
<option value="00604">NAIROBI-LOWER KABETE - 00604</option>
<option value="00510">NAIROBI-MAKONGENI - 00510</option>
<option value="00611">NAIROBI-MATHARE VALLEY - 00611</option>
<option value="00503">NAIROBI-MBAGATHI - 00503</option>
<option value="00504">NAIROBI-MCHUMBI RD - 00504</option>
<option value="00519">NAIROBI-MLOLONGO - 00519</option>
<option value="00619">NAIROBI-MUTHAIGA - 00619</option>
<option value="00600">NAIROBI-NGARA ROAD - 00600</option>
<option value="00505">NAIROBI-NGONG ROAD - 00505</option>
<option value="00506">NAIROBI-NYAYO STADIUM - 00506</option>
<option value="00623">NAIROBI-PARKLANDS - 00623</option>
<option value="00300">NAIROBI-RONALD NGALA ST. - 00300</option>
<option value="00520">NAIROBI-RUAI - 00520</option>
<option value="00618">NAIROBI-RUARAKA - 00618</option>
<option value="00606">NAIROBI-SARIT CENTRE - 00606</option>
<option value="00400">NAIROBI-TOM MBOYA ST - 00400</option>
<option value="00517">NAIROBI-UHURU GARDENS - 00517</option>
<option value="00605">NAIROBI-UTHIRU - 00605</option>
<option value="00621">NAIROBI-VILLAGE MARKET - 00621</option>
<option value="00507">NAIROBI-VIWANDANI - 00507</option>
<option value="00800">NAIROBI-WESTLANDS - 00800</option>
<option value="00508">NAIROBI-YAYA TOWERS - 00508</option>
<option value="20142">NAISHI - 20142</option>
<option value="50211">NAITIRI - 50211</option>
<option value="20117">NAIVASHA - 20117</option>
<option value="20100">NAKURU - 20100</option>
<option value="00207">NAMANGA - 00207</option>
<option value="50127">NAMBACHA - 50127</option>
<option value="50409">NAMBALE - 50409</option>
<option value="30301">NANDI HILLS - 30301</option>
<option value="40615">NANGO - 40615</option>
<option value="10400">NANYUKI - 10400</option>
<option value="10105">NARO MORU - 10105</option>
<option value="20500">NAROK - 20500</option>
<option value="90118">NDALANI - 90118</option>
<option value="50212">NDALU - 50212</option>
<option value="20404">NDANAI - 20404</option>
<option value="20306">NDARAGWA - 20306</option>
<option value="00229">NDERU - 00229</option>
<option value="40302">NDHIWA - 40302</option>
<option value="01016">NDITHINI - 01016</option>
<option value="90202">NDOOA - 90202</option>
<option value="40602">NDORI - 40602</option>
<option value="20317">NDUNYU NJERU - 20317</option>
<option value="80311">NGAMBWA - 80311</option>
<option value="00218">NGECHA - 00218</option>
<option value="00901">NGEWA - 00901</option>
<option value="30404">NGINYANG - 30404</option>
<option value="40603">NGIYA - 40603</option>
<option value="00208">NGONG HILLS - 00208</option>
<option value="90407">NGUNI - 90407</option>
<option value="90129">NGWATA - 90129</option>
<option value="20107">NJORO - 20107</option>
<option value="60214">NKONDI - 60214</option>
<option value="60202">NKUBU - 60202</option>
<option value="20318">NORTH-KINANGOP - 20318</option>
<option value="90130">NUNGUNI - 90130</option>
<option value="40124">NYABONDO - 40124</option>
<option value="20300">NYAHURURU - 20300</option>
<option value="80118">NYALI - 80118</option>
<option value="40203">NYAMACHE - 40203</option>
<option value="40206">NYAMARAMBE - 40206</option>
<option value="40205">NYAMBUNWA - 40205</option>
<option value="40500">NYAMIRA - 40500</option>
<option value="40632">NYAMONYE - 40632</option>
<option value="40333">NYANDHIWA - 40333</option>
<option value="40126">NYANGANDE - 40126</option>
<option value="40127">NYANGORI - 40127</option>
<option value="40218">NYANGUSU - 40218</option>
<option value="40311">NYANGWESO - 40311</option>
<option value="40502">NYANSIONGO - 40502</option>
<option value="40514">NYARAMBA - 40514</option>
<option value="40402">NYATIKE - 40402</option>
<option value="10100">NYERI - 10100</option>
<option value="40611">NYILIMA - 40611</option>
<option value="90136">NZEEKA - 90136</option>
<option value="90143">NZIU - 90143</option>
<option value="40204">OGEMBO - 40204</option>
<option value="40323">OGONGO - 40323</option>
<option value="20303">OL-KALOU - 20303</option>
<option value="20152">OLENGURUONE - 20152</option>
<option value="20302">OLJORO-OROK - 20302</option>
<option value="20503">OLOLULUNGA - 20503</option>
<option value="40221">OMOGONCHORO - 40221</option>
<option value="00511">ONGATA RONGAI - 00511</option>
<option value="30602">ORTUM - 30602</option>
<option value="10106">OTHAYA - 10106</option>
<option value="40222">OYUGIS - 40222</option>
<option value="40111">PAP-ONDITI - 40111</option>
<option value="40131">PAW AKUCHE - 40131</option>
<option value="50410">PORT VICTORIA - 50410</option>
<option value="40132">RABUOR - 40132</option>
<option value="40604">RAGENGNI - 40604</option>
<option value="40412">RANEN - 40412</option>
<option value="40303">RANGWE - 40303</option>
<option value="40403">RAPOGI - 40403</option>
<option value="40137">RATTA - 40137</option>
<option value="40133">RERU - 40133</option>
<option value="70302">RHAMU - 70302</option>
<option value="40511">RIGOMA - 40511</option>
<option value="40512">RIOCHANDA - 40512</option>
<option value="40220">RIOSIRI - 40220</option>
<option value="40326">RODI KOPANY - 40326</option>
<option value="20108">RONGAI - 20108</option>
<option value="40404">RONGO - 40404</option>
<option value="20204">RORET - 20204</option>
<option value="00232">RUIRU - 00232</option>
<option value="20321">RUMURUTI - 20321</option>
<option value="60103">RUNYENJES - 60103</option>
<option value="20313">RURII - 20313</option>
<option value="10133">RURINGU - 10133</option>
<option value="10208">SABA-SABA - 10208</option>
<option value="80308">SAGALLA - 80308</option>
<option value="10230">SAGANA - 10230</option>
<option value="80120">SAMBURU - 80120</option>
<option value="40405">SARE - 40405</option>
<option value="40612">SAWAGONGO - 40612</option>
<option value="40614">SEGA - 40614</option>
<option value="50308">SEREM - 50308</option>
<option value="30407">SERETUNIN - 30407</option>
<option value="50106">SHIANDA - 50106</option>
<option value="80407">SHIMBA HILLS - 80407</option>
<option value="80409">SHIMONI - 80409</option>
<option value="50107">SHINYALU - 50107</option>
<option value="60104">SIAKAGO - 60104</option>
<option value="40600">SIAYA - 40600</option>
<option value="40605">SIDINDI - 40605</option>
<option value="40635">SIGOMRE - 40635</option>
<option value="20405">SIGOR - 20405</option>
<option value="20422">SILIBWET - 20422</option>
<option value="40308">SINDO - 40308</option>
<option value="20423">SIONGIROI - 20423</option>
<option value="50208">SIRISIA - 50208</option>
<option value="20128">SOLAI - 20128</option>
<option value="40109">SONDU - 40109</option>
<option value="40110">SONGHOR - 40110</option>
<option value="20205">SOSIOT - 20205</option>
<option value="20406">SOTIK - 20406</option>
<option value="20319">SOUTH-KINANGOP - 20319</option>
<option value="30105">SOY - 30105</option>
<option value="40418">SUBA-KURIA - 40418</option>
<option value="20109">SUBUKIA - 20109</option>
<option value="20602">SUGUTA MAR MAR - 20602</option>
<option value="20151">SULMAC - 20151</option>
<option value="90132">SULTAN HAMUD - 90132</option>
<option value="40400">SUNA - 40400</option>
<option value="40229">TABAKA - 40229</option>
<option value="70303">TAKABA - 70303</option>
<option value="90131">TALA - 90131</option>
<option value="30704">TAMBACH - 30704</option>
<option value="80309">TAUSA - 80309</option>
<option value="80302">TAVETA - 80302</option>
<option value="90133">TAWA - 90133</option>
<option value="30405">TENGES - 30405</option>
<option value="01000">THIKA - 01000</option>
<option value="10406">TIMAU - 10406</option>
<option value="20110">TIMBER MILLS - 20110</option>
<option value="30108">TIMBOROA - 30108</option>
<option value="50309">TIRIKI - 50309</option>
<option value="30707">TOT - 30707</option>
<option value="90203">TULIA - 90203</option>
<option value="60213">TUNYAI - 60213</option>
<option value="30106">TURBO - 30106</option>
<option value="40606">UGUNJA - 40606</option>
<option value="80400">UKUNDA - 80400</option>
<option value="40607">UKWALA - 40607</option>
<option value="00222">UPLANDS - 00222</option>
<option value="40608">URANGA - 40608</option>
<option value="40228">URIRI - 40228</option>
<option value="40609">USENGE - 40609</option>
<option value="50310">VIHIGA - 50310</option>
<option value="80119">VIPINGO - 80119</option>
<option value="80211">VITENGENI - 80211</option>
<option value="80300">VOI - 80300</option>
<option value="60121">WACHORO - 60121</option>
<option value="70200">WAJIR - 70200</option>
<option value="20603">WAMBA - 20603</option>
<option value="90103">WAMUNYU - 90103</option>
<option value="00614">WANGIGE - 00614</option>
<option value="10303">WANGURU - 10303</option>
<option value="20305">WANJOHI - 20305</option>
<option value="80202">WATAMU - 80202</option>
<option value="50205">WEBUYE - 50205</option>
<option value="30603">WEI-WEI - 30603</option>
<option value="80303">WERUGHA - 80303</option>
<option value="40141">WINAM(KISUMU GPO EXTN.) - 40141</option>
<option value="80504">WITU - 80504</option>
<option value="50311">WODANGA - 50311</option>
<option value="80304">WUNDANYI - 80304</option>
<option value="40610">YALA - 40610</option>
<option value="90134">YOANI - 90134</option>
<option value="30214">ZIWA - 30214</option>
<option value="90213">ZOMBE - 90213</option>


</select></td></tr><tr><td class="subhead" width="25%">Town: </td><td width="25%"><input name="inpTown" value="" maxlength="50" tabindex="5"></td><td class="subhead" width="25%">Marital Status:</td><td width="25%"><select name="inpMaritalStatus"  id="reportComboMaritalStatus" tabindex="6"><option value=""></option>
<option value="1">Single</option>
<option value="2">Married</option>
<option value="3">Widow/Widower</option>
<option value="4">Religious</option>
<option value="5">Priest</option>
<option value="6">Others</option>


</select></td></tr><tr><td class="subhead" width="25%">Home County: <span class="superscript">('Foreigner' for non-Kenyan citizen)</span><span class="req">*</span></td><td width="25%"><select name="inpCounty"  id="reportComboCounty" class="required" tabindex="7"><option value=""></option>
<option value="1">Baringo</option>
<option value="2">Bomet</option>
<option value="3">Bungoma</option>
<option value="4">Busia</option>
<option value="5">Elgeyo Marakwet</option>
<option value="6">Embu</option>
<option value="48">Foreigner</option>
<option value="7">Garissa</option>
<option value="8">Homa Bay</option>
<option value="9">Isiolo</option>
<option value="10">Kajiado</option>
<option value="11">Kakamega</option>
<option value="12">Kericho</option>
<option value="13">Kiambu</option>
<option value="14">Kilifi</option>
<option value="15">Kirinyaga</option>
<option value="16">Kisii</option>
<option value="17">Kisumu</option>
<option value="18">Kitui</option>
<option value="19">Kwale</option>
<option value="20">Laikipia</option>
<option value="21">Lamu</option>
<option value="22">Machakos</option>
<option value="23">Makueni</option>
<option value="24">Mandera</option>
<option value="25">Marsabit</option>
<option value="26">Meru</option>
<option value="27">Migori</option>
<option value="28">Mombasa</option>
<option value="29">Murang'a</option>
<option value="30">Nairobi</option>
<option value="31">Nakuru</option>
<option value="32">Nandi</option>
<option value="33">Narok</option>
<option value="34">Nyamira</option>
<option value="35">Nyandarua</option>
<option value="36">Nyeri</option>
<option value="37">Samburu</option>
<option value="38">Siaya</option>
<option value="39">Taita Taveta</option>
<option value="40">Tana River</option>
<option value="41">Tharaka Nithi</option>
<option value="42">Trans Nzoia</option>
<option value="43">Turkana</option>
<option value="44">Uasin Gishu</option>
<option value="45">Vihiga</option>
<option value="46">Wajir</option>
<option value="47">West Pokot</option>


</select>
</td>
<td class="subhead" width="25%">Mobile Number: <span class="req">*</span></td>
<td width="25%"><input name="inpMobileNumber" size="45" value="" class="required" maxlength="50" tabindex="8"></td>
</tr>
<tr>
	<td class="subhead" width="25%">Residence: <span class="req">*</span></td>
	<td width="25%"><input name="inpResidence" type="text" value="" class="required" size="50" maxlength="50" tabindex="9"></td>
	<td class="subhead" width="25%">Personal Email: <span class="req">*</span></td>
	<td width="25%"><input name="inpEmail" type="text" value="" class="required" size="45" maxlength="50" tabindex="10"></td>
</tr>
<tr>
	<td colspan="4" style="font-weight: bold; text-align: center; background-color: #DDDDDD; width: 380px;"> Parents/Guardian Details </td>
</tr>
<tr>
	<td class="subhead">Father's Name:</td><td><input type="text" name="inpFathersName" value="" size="50" maxlength="50" tabindex="11" readonly="readonly" disabled="disabled"></td>
	<td class="subhead">Father's Email: </td><td><input name="inpFathersEmail" type="text" size="50" maxlength="50" value="j" tabindex="12"readonly="readonly" disabled="disabled"></td>
</tr>
<tr>
	<td class="subhead">Father's Mobile Number:</td><td><input type="text" name="inpFatherMobileNumber" value="" size="50" maxlength="50" tabindex="13" readonly="readonly" disabled="disabled"></td>
	<td class="subhead">Father's Occupation:</td><td><input type="text" name="inpFatherOccupation" value="" size="50" maxlength="50" tabindex="14" readonly="readonly" disabled="disabled"></td>
</tr>
<tr>
	<td class="subhead">Mother's Name:</td><td><input type="text" name="inpMotherName" value="" size="50" maxlength="50" tabindex="15" readonly="readonly" disabled="disabled"></td>
	<td class="subhead">Mother's Email: </td><td><input name="inpMotherEmail" type="text" size="50" maxlength="50" value="" tabindex="16" readonly="readonly" disabled="disabled"></td>
</tr>
<tr>
	<td class="subhead">Mother's Mobile Number:</td>
		<td><input type="text" name="inpMotherMobileNumber" value="" size="50" maxlength="50" tabindex="17" readonly="readonly" disabled="disabled"></td>
		<td class="subhead">Mother's Occupation:</td><td><input type="text" name="inpMotherOccupation" value="" size="50" maxlength="50" tabindex="18" readonly="readonly" disabled="disabled"></td>
	</tr>
	<tr>
		<td class="subhead">Guardian's Name:</td><td><input type="text" name="inpGurdianName" value="" size="50" maxlength="50" tabindex="19" readonly="readonly" disabled="disabled"></td><td class="subhead">Guardian's Email: </td><td><input name="inpGurdianEmail" type="text" size="50" maxlength="50" value="" tabindex="20" readonly="readonly" disabled="disabled"></td>
	</tr>
	<tr>
		<td class="subhead">Guardian's Mobile Number:</td><td><input type="text" name="inpGurdianMobileNumber" value="" size="50" maxlength="50" tabindex="21" readonly="readonly" disabled="disabled"></td><td class="subhead">Guardian's Occupation:</td><td><input type="text" name="inpGurdianOccupation" value="" size="50" maxlength="50" tabindex="22" readonly="readonly" disabled="disabled"></td>
	</tr>
</tbody>
</table>
<br>
<br>
		<div class="buttons" align="center"><a href="#" onclick="validateForm('POST'); return false;"><img src="https://su-sso.strathmore.edu/web/images/Guardar.jpg" alt="Save" border="0"></a></div></form></div><div id="b" class="tabcontent ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"><div align="center"><table class="table"><tbody></tbody>
			<tbody><tr><td><table style="width:100%"><tbody></tbody><tbody><tr><th width="60%"><label>Name</label></th><th width="40%"><label>File</label></th></tr><tr><td> Secondary School Result Slip</td><td><div id="paramDisplayResultSlip" style="margin-top: 5px; display: none;"><a target="_blank" href="" id="paramResultSlip" style="color: blue;display:block;">Result Slip</a></div></td></tr><tr><td>National ID/Passport/Birth certificate</td><td><div id="paramDisplayId" style="margin-top: 5px; display: none;"><a target="_blank" href="" id="paramIdURL" style="color: blue;display:block;">National ID/Passport/Birth certificate</a></div></td></tr></tbody></table></td></tr><tr><td><form id="documentsUpload" method="post" enctype="multipart/form-data"><input type="hidden" name="Command" value="Upload_Documents"><input type="hidden" name="inpUserType" value="ALUMNO"><table><tbody><tr><th colspan="2"><label>Please Upload the files below</label></th></tr><tr><td class="subhead"><label>Secondary school results slip</label></td><td><input type="file" name="inpResultSlip" id="inpResultSlip"></td></tr><tr><td class="subhead"><label>National ID/Passport/Birth certificate</label></td><td><input type="file" name="inpId" id="inpId"></td></tr><tr><td></td><td><div class="buttons" align="center"><button type="submit" id="submitDocuments"><img src="https://su-sso.strathmore.edu/web/images/Guardar.jpg" alt="Save" border="0"></button></div></td></tr></tbody></table></form></td></tr></tbody></table></div></div></div></div>

</div></div><link rel="stylesheet" type="text/css" href="https://su-sso.strathmore.edu/web/css/jquery-ui-1.8.7.custom.css">

</div><div align="center" style="color: grey; size: 6px;"> Copyright ©
					<script type="text/javascript">						var theDate = new Date();
						document.write(theDate.getFullYear());
					</script>2021
				Strathmore University</div>
            </div>


@endsection








