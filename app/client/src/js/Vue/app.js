import { createApp } from 'vue';
import mitt from 'mitt';
import { vMaska } from 'maska/vue';
import InlineSvg from 'vue-inline-svg';

const emitter = mitt();

const app = createApp({
    mounted(){
        emitter.emit('mounted');
    }
});

app.config.globalProperties.emitter = emitter;
app.component('InlineSvg', InlineSvg);
app.directive('maska', vMaska);

export default app;
