<style scoped>
     @import '@/assets/dashboardcss/css/tailwind.output.css';
     @import 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap';

</style>


<script>
  export default {
    name: "DashboardStyle",

    mounted() {
        const scriptPaths = [

            '/public/dashboardjs/init-alpine.js',
            'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js',
            '/public/dashboardjs/charts-lines.js',
            '/public/dashboardjs/charts-pie.js',
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js',
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
