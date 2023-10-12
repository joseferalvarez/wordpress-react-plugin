const { render } = wp.element;
import App from './App';
import './styles/index.scss';

window.addEventListener('load', () => {
    const reactApp = document.getElementById('react-app');

    if (reactApp) {
        render(<App route={ reactApp.dataset.route } />, reactApp);
    }
});