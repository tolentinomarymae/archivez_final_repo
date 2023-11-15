<style scoped>
     @import '@/assets/purplecss/vendors/mdi/css/materialdesignicons.min.css';
     @import '@/assets/purplecss/vendors/css/vendor.bundle.base.css';
     @import '@/assets/purplecss/css/style.css';

     
</style>


<script>
  export default {
    name: "DashboardStyle",

    mounted() {
        const scriptPaths = [

            '/purplejs/vendors/js/vendor.bundle.base.js',
            '/purplejs/vendors/chart.js/Chart.min.js',
            '/purplejs/js/jquery.cookie.js',
            '/purplejs/js/off-canvas.js',
            '/purplejs/js/hoverable-collapse.js',
            '/purplejs/js/dashboard.js',
            '/purplejs/js/todolist.js',
       
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
            await loadScript(scriptPaths[0]);
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
