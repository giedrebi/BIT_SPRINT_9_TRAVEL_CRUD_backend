import React from "react";
import "./../../css/app.css";
import Header from "./Components/Header";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Countries from "./Components/Countries/Countries";
import Home from "./Components/Home";

function Example() {
    return (
        <BrowserRouter>
            <Header />
            <Routes>
                <Route path="/home" element={<Home />} />
                <Route path="/countries" element={<Countries />} />
            </Routes>
        </BrowserRouter>
    );
}

export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
