import app from './Vue/app';
import useWhenActivated from '@composables/useWhenActivated';

async function initPage() {
    await useWhenActivated;
    app.mount('main');
};

initPage();
