@extends('layouts.index')
@section('symposiums')
    <style>

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="breadcrumbs"><nav class="breadcrumb"><a href="/2018/">Home</a> » Symposiums</nav></div>
                <h1 >Symposiums</h1>
                <br>
                <br>
                <h2>Co-affiliated Symposiums/Workshops</h2><br>
                <div class="card mb-4">
                    <table border="1" cellpadding="0" cellspacing="0" style="width:100%"><thead><tr><th scope="col" style="vertical-align:middle"><strong>Symposium</strong></th>
                            <th scope="col" style="vertical-align:middle"><strong>Submission deadline</strong></th>
                            <th scope="col" style="vertical-align:middle"><strong>Submission Link</strong></th>
                        </tr></thead><tbody><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/industry-track2018" target="_blank">Call for Industry Track Papers</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 5, 2018</strong></td>
                            <td class="rtecenter" style="vertical-align:middle"><a href="https://edas.info/N24695" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/content/call-poster-papers" target="_blank">Call for Poster Papers</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 20, 2018</strong></td>
                            <td class="rtecenter" style="vertical-align:middle"><a href="https://edas.info/N24739" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/isi-home">Sixth International Symposium on Intelligent Informatics (ISI’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 20, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24618" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/v-homes">Fifth International Symposium on Computer Vision and the Internet (VisionNet’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 5, 2018​</strong></td>
                            <td style="vertical-align:middle">     <a href="https://edas.info/N24625" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/sai-home">Third Symposium on Advances in Applied Informatics (SAI’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>June 30, 2018​</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24624" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/nlp-home">Seventh Symposium on Natural Language Processing (NLP'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>June 30, 2018​</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24620" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/wci-home">Sixth International Symposium on Women in Computing and Informatics (WCI'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 1, 2018​</strong></td>
                            <td style="vertical-align:middle">     <a href="https://edas.info/N24640" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/ciap-home">Second Symposium on Recent Advances in Communication Theory, Information Theory, Antennas and Propagation (CIAP'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 05, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24623" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/setcac-home">Third Symposium on Emerging Topics in Computing and Communications (SETCAC'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 10, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="https://edas.info/N24696" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/icais-home">Sixth Symposium on Control, Automation, Industrial Informatics and Smart Grid (ICAIS'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 10, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24629" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/ain-home">Symposium on Advances in Artificial Intelligence and Neurotechnologies (AIN'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>June 30, 2018</strong></td>
                            <td style="vertical-align:middle"><a href="https://edas.info/N24578" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/sifl-home">Symposium on Internet of Things, Fog Computing and Wireless Location Technologies (SIFL'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 9, 2018​</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24584" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/acm-home">Symposium on Applications of Computational Intelligence and Machine Learning in Networked Systems (ACMiNS)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 21, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24708" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/vdec-home">Symposium on VLSI Design and Embedded Computing (VDEC’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 5, 2018</strong></td>
                            <td style="vertical-align:middle"><a href="https://edas.info/N24630" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/isatda-home">Symposium on Assistive Technologies for the Differently Abled  (ATDA'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 15, 2018</strong></td>
                            <td style="vertical-align:middle"><a href="http://edas.info/N24713" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/sbb2018">Symposium on Bioinformatics and Bioforensics (SBB’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 15, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24810" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/gnds2018">Symposium on Green Networks and Distributed Systems  (GNDS'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>TBA</strong></td>
                            <td style="vertical-align:middle">     <a href="http://icacci-conference.org/2018/content/paper-submission-guidelines"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/sense-2018">Symposium on Ensemble Networks and Software Engineering (SENSE'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 14, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="https://edas.info/N24738" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="height:40px; vertical-align:middle"><a href="http://icacci-conference.org/2018/wsta2018">Symposium on Wireless Sensor Technologies and Applications (WSTA’18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>July 20, 2018</strong></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N24811" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><strong><span style="font-size:16px"><a href="http://icacci-conference.org/2018/spwmc2018"><span style="color:#B22222">Symposium on Signal Processing for Wireless and Multimedia Communications (SPWMC'18)</span></a></span></strong></td>
                            <td class="rtecenter" style="vertical-align:middle"><span style="color:#FF0000"><span style="font-size:16px"><strong>August 8, 2018​</strong></span></span></td>
                            <td style="vertical-align:middle">     <a href="http://edas.info/N25344" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/smvh2018">Symposium on Multimedia, Visualization and Human-Computer Interaction (SMVH'18)</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>TBA</strong></td>
                            <td style="vertical-align:middle">     <a href="http://icacci-conference.org/2018/content/paper-submission-guidelines"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><a href="http://icacci-conference.org/2018/astronomy" target="_blank">Workshop on Modeling and Machine Learning in Astronomy</a></td>
                            <td class="rtecenter" style="vertical-align:middle"><strong>June 30, 2018</strong></td>
                            <td class="rtecenter" style="vertical-align:middle"><a href="http://edas.info/N25182" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr><tr><td style="vertical-align:middle"><strong><span style="font-size:14px"><a href="http://icacci-conference.org/2018/CSRTech2018" target="_blank"><span style="color:#B22222">First Symposium on Social Media Analytics, Fintech, Healthcare and Corporate Social Responsibility Management – CSRTech2018</span></a></span></strong></td>
                            <td class="rtecenter" style="vertical-align:middle"><span style="color:#FF0000"><span style="font-size:16px"><strong>August 15, 2018</strong></span></span></td>
                            <td class="rtecenter" style="vertical-align:middle"><a href="https://edas.info/newPaper.php?c=25149" target="_blank"><img alt="EDAS Link" src="http://icacci-conference.org/website/sites/default/files/submit_icon.gif" /></a></td>
                        </tr></tbody></table>
                </div>
            </div>
        </div>
    </div>

@endsection