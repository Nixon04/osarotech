<script setup>
  import Headers  from './front_components/headers.vue';
  import Footer  from './front_components/footer.vue';
  const asseturl = (path) => `/images/${path}`;
</script>


<template>
    <div>
        <div class="main-component">
           <Headers/>

           <div class="as-hero-section">
            <div class="lines-grade"></div>
                <div class="fix-1">
                     <div class="avatar-circle">
                        <img src="https://img.freepik.com/premium-photo/memoji-african-american-man-white-background-emoji_826801-6856.jpg?w=1380"
                         alt="_image" class="img-fluid-cirlce">
                     </div>
                     <img :src="asseturl('as_angles.png')" class="rotate-control-1" alt="_">
                 </div>

                 <div class="fix-2">
                    <div class="avatar-circle">
                       <img src="https://img.freepik.com/free-photo/confident-entrepreneur-looking-camera-with-arms-folded-smiling_1098-18840.jpg?t=st=1746722613~exp=1746726213~hmac=86b8231bf1ac59dae8a416c6b98aa8ca90f27dbdcf6dbc94cf5dd5cd434d8123&w=826"
                        alt="_image" class="img-fluid-cirlce">
                    </div>
                    <img :src="asseturl('as_angles.png')" class="rotate-control-2" alt="_">
                </div>

                <div class="fix-3">
                    <div class="avatar-circle">
                       <img src="https://img.freepik.com/free-photo/medium-shot-smiley-woman-work_23-2149304143.jpg?t=st=1746722668~exp=1746726268~hmac=2b5b3c2c1444b64cf5905156290cebc57e8584a21e00ba52dcc6f5a194accd85&w=826"
                        alt="_image" class="img-fluid-cirlce">
                    </div>
                    <img :src="asseturl('as_angles.png')" class="rotate-control-3" alt="_">
                </div>

                <div class="fix-4">
                    <div class="avatar-circle">
                        <img src="https://img.freepik.com/free-photo/close-up-portrait-cheerful-happy-young-dark-skinned-male-tourist-wearing-winter-coat-glasses-hat-standing-streets-modern-metropolis-night-waiting-taxi-outside-airport_273609-1321.jpg?uid=R54737764&ga=GA1.1.1714221656.1739625290&semt=ais_hybrid&w=740"
                        alt="_image" class="img-fluid-cirlce">
                    </div>
                    <img :src="asseturl('as_angles.png')" class="rotate-control-4" alt="_">
                </div>

                <div class="as-hero-contents">
                    <div class="as-hightlight-box">
                         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="28" viewBox="0 0 24 24"><!-- Icon from Solar by 480 Design - https://creativecommons.org/licenses/by/4.0/ --><path fill="currentColor" d="m5.67 9.914l3.062-4.143c1.979-2.678 2.969-4.017 3.892-3.734s.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363c2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734s-.923-1.925-.923-5.21v-.31c0-1.185 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363c-2.22 0-3.329 0-3.703-.673l-.019-.034c-.354-.683.289-1.552 1.574-3.29"/></svg>
                        <span>CREATE FOR FAST</span>
                    </div>
                    <div class="as-heavy-statement">
                        <h1 class="as-h1">One tool to <span>manage</span>
                        contracts and your team
                        </h1>
                    </div>
                    <div class="as-light-statement">
                        <span class="as-light-text">
                            AsaroTechLimited helps legal teams work faster, smarter and more
                            efficiently, delivering the visibility and data-driven insights
                            to mitigate risk and ensure compliance.
                        </span>
                    </div>
                    <div class="action-body">
                      <div class="as-button-content">
                         Cheapexpense
                      </div>
                      <div class="as-button-content-light">
                        View policy
                     </div>
                    </div>
                </div>
           </div>

            <section class="services-hook">
                <div class="as-services-solutions">
                    <div class="as-hightlight-box pat-top">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="28" viewBox="0 0 24 24"><!-- Icon from Solar by 480 Design - https://creativecommons.org/licenses/by/4.0/ --><path fill="currentColor" d="m5.67 9.914l3.062-4.143c1.979-2.678 2.969-4.017 3.892-3.734s.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363c2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734s-.923-1.925-.923-5.21v-.31c0-1.185 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363c-2.22 0-3.329 0-3.703-.673l-.019-.034c-.354-.683.289-1.552 1.574-3.29"/></svg>
                    <span>SERVICES</span>
                </div>
                    <div class="as-flex-crowd">
                        <div class="as-flex-left">
                            <div class="as-left-container">
                            <div class="as-h1">Cheapexpense - VTU_Payment</div>
                                <div class="as-left-contents mb-3">
                                    <span> is a Virtual Top-Up (VTU) platform in Nigeria that offers a range of digital services, including affordable data bundles, airtime, electricity bill payments, and more. It caters to individual consumers and businesses seeking cost-effective solutions for their digital needs.
                                    </span>
                                </div>
                                <div class="links-to-download">
                                    <div class="as-android">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Google Material Icons by Material Design Authors - https://github.com/material-icons/material-icons/blob/master/LICENSE --><path fill="currentColor" d="m17.6 9.48l1.84-3.18c.16-.31.04-.69-.26-.85a.637.637 0 0 0-.83.22l-1.88 3.24a11.46 11.46 0 0 0-8.94 0L5.65 5.67a.643.643 0 0 0-.87-.2c-.28.18-.37.54-.22.83L6.4 9.48A10.78 10.78 0 0 0 1 18h22a10.78 10.78 0 0 0-5.4-8.52M7 15.25a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5m10 0a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5"/></svg>
                                        <span>Download Playstore</span>
                                    </div>
                                    <div class="as-ios">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Google Material Icons by Material Design Authors - https://github.com/material-icons/material-icons/blob/master/LICENSE --><path fill="currentColor" d="M17.05 20.28c-.98.95-2.05.8-3.08.35c-1.09-.46-2.09-.48-3.24 0c-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8c1.18-.24 2.31-.93 3.57-.84c1.51.12 2.65.72 3.4 1.8c-3.12 1.87-2.38 5.98.48 7.13c-.57 1.5-1.31 2.99-2.54 4.09zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25c.29 2.58-2.34 4.5-3.74 4.25"/></svg>
                                        <span>Download Apple</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="as-flex-right">
                            <div class="center-terms">
                               <img :src="asseturl('service3.png') " class="w-50" alt="">
                            </div>
                        </div>
                    </div>
                </div>
           </section>

          <section class="as-footer" >
            <div class="as-footer-container">
                <div class="as-footer-seclogo">
                    <span class="text-white as-footer-text">AsaroTechLimited</span>
                    <h4 class="text-white fs-6">All Right Reserved</h4>
                </div>
            </div>
          </section>
          
        </div>
    </div>
</template>