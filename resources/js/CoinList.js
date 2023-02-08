import React, { useState, useEffect } from 'react';
import CoinList from './CoinList';
import TopGainers from './TopGainers';

const TopGainersTable = () => {
    const [coins, setCoins] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
            const url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=50&page=1&sparkline=false&price_change_percentage=24h&exchange=binance';
            const response = await fetch(url);
            const data = await response.json();
            setCoins(data);
        };

        fetchData();
    }, []);

    return (
        <table className="table-auto">
            <thead>
                <tr className="bg-gray-200">
                    <th className="px-4 py-2">Rank</th>
                    <th className="px-4 py-2">Coin</th>
                    <th className="px-4 py-2">Price</th>
                    <th className="px-4 py-2">24h Gain %</th>
                </tr>
            </thead>
            <tbody>
                {coins.map((coin, key) => (
                    <tr key={key}>
                        <td className="px-4 py-2">{key + 1}</td>
                        <td className="px-4 py-2">{coin.symbol}</td>
                        <td className="px-4 py-2">{coin.current_price}</td>
                        <td className="px-4 py-2">{coin.market_cap_change_percentage_24h}</td>
                    </tr>
                ))}
            </tbody>
        </table>
    );
};

export default TopGainersTable;
