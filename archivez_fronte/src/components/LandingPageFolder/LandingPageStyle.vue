<style scoped>
    @import '@/assets/landingpagecss/css/bootstrap.css';
    @import '@/assets/landingpagecss/css/styles.css';
    @import '@/assets/landingpagecss/css/fontawesome-all.css';
    @import '@/assets/landingpagecss/css/swiper.css';
    @import '@/assets/landingpagecss/css/magnific-popup.css';
	


</style>


<script>
  export default {
    name: "LandingPageStyle",

    mounted() {
        const scriptPaths = [
        '/landingpagejs/jquery.min.js',
        '/landingpagejs/popper.min.js',
        '/landingpagejs/bootstrap.min.js',
        '/landingpagejs/jquery.easing.min.js',
        '/landingpagejs/swiper.min.js',
        '/landingpagejs/jquery.magnific-popup.js',
        '/landingpagejs/validator.min.js',
        '/landingpagejs/scripts.js',
        ];

        const loadScript = (path) => {
        return new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.src = path;
            script.onload = resolve;
            script.onerror = reject;
            document.body.appendChild(script);
        });
        };

        const loadScripts = async () => {
        try {
            await loadScript(scriptPaths[0]); // Load jQuery first
            for (let i = 1; i < scriptPaths.length; i++) {
            await loadScript(scriptPaths[i]);
            }
        } catch (error) {
            console.error('Failed to load scripts:', error);
        }
        };
        loadScripts();
    }


   
  };
  
</script>
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81dcaaca99c75e00","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
-->
