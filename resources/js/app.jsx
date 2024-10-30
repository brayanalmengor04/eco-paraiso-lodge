import React from 'react';
import ReactDOM from 'react-dom/client'; 
import FeatureSection from './components/FeatureItem';


function App() {
    return (
        <>
             <div class="container-fluid feature bg-light py-5">
                <div class="container py-5">
                    <FeatureSection/>
                </div>
             </div>
        </>
    );
}
ReactDOM.createRoot(document.getElementById('app')).render(<App />);
