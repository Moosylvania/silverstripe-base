import app from './Vue/app';
import useWhenActivated from './Vue/Composables/useWhenActivated';

async function initPage() {
    await useWhenActivated;
    app.mount('main');
};

initPage();
