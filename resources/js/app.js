import React from 'react';
import ReactDOM from 'react-dom';
import TopGainers from './TopGainers';
;
import CoinList from './CoinList';

if (document.getElementById('root')) {
    ReactDOM.render(<CoinList />, document.getElementById('root'));
}
