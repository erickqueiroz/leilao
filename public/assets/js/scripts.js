"use strict";

let dataInfoEnv = {
    keyInfura: "3ac68be0e4f44833bce00d483f3bd104",
    infuraETH: "https://celo-alfajores.infura.io/v3/3ac68be0e4f44833bce00d483f3bd104",
    urlNetwork: "https://alfajores.celoscan.io/",
    redePadrao: "Celo Alfajores",
    contrato: '0xe89080D4D451790ef348c5D0bbD5D8501c15d0E7',
    contratoLeilao: '0xB20350491f7562a8b708554d3956571c970c193a',
    gateway: "",
    owner: "0x94C4a3E8bfa74594249A8df7F0558Ce248c89bd5",
    chainId: '0x5',
    rpc: 'https://alfajores.celoscan.io/v3/',
    explorer: 'https://alfajores.celoscan.io/',
    scan: 'https://alfajores.celoscan.io/tx/',
    abi: JSON.parse('[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[],"name":"ApprovalQueryForNonexistentToken","type":"error"},{"inputs":[],"name":"ApproveToCaller","type":"error"},{"inputs":[],"name":"BalanceQueryForZeroAddress","type":"error"},{"inputs":[],"name":"MintToZeroAddress","type":"error"},{"inputs":[],"name":"MintZeroQuantity","type":"error"},{"inputs":[{"internalType":"address","name":"operator","type":"address"}],"name":"OperatorNotAllowed","type":"error"},{"inputs":[],"name":"OwnerQueryForNonexistentToken","type":"error"},{"inputs":[],"name":"TransferCallerNotOwnerNorApproved","type":"error"},{"inputs":[],"name":"TransferFromIncorrectOwner","type":"error"},{"inputs":[],"name":"TransferToNonERC721ReceiverImplementer","type":"error"},{"inputs":[],"name":"TransferToZeroAddress","type":"error"},{"inputs":[],"name":"URIQueryForNonexistentToken","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"approved","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"operator","type":"address"},{"indexed":false,"internalType":"bool","name":"approved","type":"bool"}],"name":"ApprovalForAll","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":true,"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"OPERATOR_FILTER_REGISTRY","outputs":[{"internalType":"contract IOperatorFilterRegistry","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"},{"internalType":"bytes","name":"_data","type":"bytes"}],"name":"_checkContractOnERC721Received","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"_contractUri","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"_transfer","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"operator","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"approve","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"baseURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"contractURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"getApproved","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getBaseURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"operator","type":"address"}],"name":"isApprovedForAll","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"endUser","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"ownerOf","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"},{"internalType":"bytes","name":"data","type":"bytes"}],"name":"safeTransferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"operator","type":"address"},{"internalType":"bool","name":"approved","type":"bool"}],"name":"setApprovalForAll","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"string","name":"_newBaseURI","type":"string"}],"name":"setBaseURI","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"nftEtherValue","type":"uint256"}],"name":"setNftEtherValue","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_mintAmount","type":"uint256"}],"name":"split","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"bytes4","name":"interfaceId","type":"bytes4"}],"name":"supportsInterface","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"},{"internalType":"string","name":"baseExtension","type":"string"}],"name":"tokenURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"tokenURI","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"transferFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"whitelistClaimed","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"withdraw","outputs":[],"stateMutability":"payable","type":"function"}]'),
    abiLeilao: JSON.parse('[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"limit","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"wallet","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"tokenId","type":"uint256"},{"indexed":false,"internalType":"address","name":"contractAddress","type":"address"}],"name":"BidAuction","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"wallet","type":"address"},{"indexed":false,"internalType":"uint256","name":"tokenId","type":"uint256"},{"indexed":false,"internalType":"address","name":"contractAddress","type":"address"}],"name":"BidAuctionWinner","type":"event"},{"inputs":[{"internalType":"address","name":"account","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"_newOwner","type":"address"}],"name":"changeOwner","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"closesAuction","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"kill","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferToken","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"tokenOwner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"auctionEnd","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"tokenOwner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"contractAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"getLastBid","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tokenId","type":"uint256"}],"name":"getWalletWinner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"whoIsTheOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"}]'),
};

let links = {
    opensea: 'https://testnets.opensea.io/assets/goerli/' + dataInfoEnv.contrato + '/1',
    etherscan: 'https://alfajores.celoscan.io/address/' + dataInfoEnv.contrato,
    openseaLeilao: 'https://testnets.opensea.io/assets/goerli/' + dataInfoEnv.contratoLeilao + '/1',
    etherscanLeilao: 'https://alfajores.celoscan.io/address/' + dataInfoEnv.contratoLeilao
};

let dataCollection = {
    name: '',
    symbol: '',
    walletWinner: '',
    lastBid: '',
};

const Web3Modal             = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains             = window.evmChains;

let web3;
let web3Modal;
let provider;
let isMetamask;
let isTorus;
let contract;
let web3Custom;
let obj;
let masc;

let userLoginData = {
    balance: "",
    address_min: "",
    address: "",
}

let buyUser = {
    amount: 0,
}

let extra = {
    _receiver: "",
    _tokenId: "",
    _quantity: "",
    _currency: "",
    _pricePerToken: "",
    _proofs: "",
    _proofMaxQuantityPerTransaction: "",
}

let buyCryptoData = {
    address : '',
    crypto: 'ETH',
    fiat: 'BRL',
    amount: '',
    total_amount: 0,
    slippage: 0
}

let intervalPtMintNft;
let intervalConfirmBuyCryptoMintNft;
let pagoMintNft                     = false;
let confirmBuyCryptoStatusMintNft   = false;
let accepted                        = true;
let rfq_temp                        = "";
let intervalGetStatusRfq;
let intervalConfirmBuyCrypto;
let horaImprimivelPixMintNft        = "";
let tempoPixMintNft                 = 300;
let acceptedMintNft                 = true;
let pago                            = false;
let intervalPt;
let confirmBuyCryptoStatus          = false;

function init() {
    const providerOptions = {
        walletconnect: {
            package: WalletConnectProvider,
            options: {
                // Mikko's test key - don't copy as your mileage may vary
                infuraId: dataInfoEnv.keyInfura,
                qrcodeModalOptions: {
                    mobileLinks: [
                        "rainbow",
                        "metamask",
                        "argent",
                        "trust",
                        "imtoken",
                        "pillar",
                    ],
                },
            }
        },
    };

    web3Modal = new Web3Modal({
        cacheProvider: true, // optional
        providerOptions, // required
        disableInjectedProvider: false
    });
}

async function onConnect() {
    $('#modalConnect').modal('hide');

    try {
        provider = await web3Modal.connect();

        await fetchAccountData();

        provider.on("accountsChanged", (accounts) => {
            fetchAccountData();
        });

        provider.on("chainChanged", (chainId) => {
            fetchAccountData();
        });

        provider.on("networkChanged", (networkId) => {
            fetchAccountData();
        });
    } catch (e) {
        console.log("Could not get a wallet connection", e);
    }
}

async function fetchAccountData() {
    web3 = new Web3(provider);

    const chainId = await web3.eth.getChainId();
    const chainData = await EvmChains.getChain(chainId);

    if (chainData.chainId != 5) {
        swal.fire({
            title: '<strong>Atenção</strong>',
            icon: 'warning',
            html:
                'Você está conectado na rede ' + chainData.name + ', por favor conecte a rede ' + dataInfoEnv.redePadrao + '.',
            showCloseButton: false,
            showConfirmButton: false,
            showCancelButton: false,
            focusConfirm: false,
            allowOutsideClick: false,
            footer: '<button class="btn btn-primary" onclick="changeNetwork(5)"><i class="fa fa-repeat"></i> ' + dataInfoEnv.redePadrao + '</button>'
        })
        return;
    }

    const accounts = await web3.eth.getAccounts();

    if (accounts.length > 0) {
        localStorage.setItem("stateApp", "on");
        userLoginData.address = accounts[0];
        $(".carteira-destino-cc-pix-lb").val(userLoginData.address);
        $(".carteira-destino-cc-pix").val(userLoginData.address);

        const rowResolvers = accounts.map(async(address) => {
            const balance               = await web3.eth.getBalance(address);
            const ethBalance            = web3.utils.fromWei(balance, "ether");
            const humanFriendlyBalance  = parseFloat(ethBalance).toFixed(4);
            userLoginData.balance       = humanFriendlyBalance;
            userLoginData.address_min   = address.substr(0,5) + '...' + address.substr(-6);
            userLoginData.address       = address;

            $(".carteira-destino-cc-pix-lb").val(userLoginData.address);
            $(".carteira-destino-cc-pix").val(userLoginData.address);

            $(".connected").html(userLoginData.address_min + ' <i class="bi-wallet me-1"></i>');
            $(".disconnect-area").show();
            $(".connect-area").hide();

            isMetamask = true;
            isTorus    = false;

            setTimeout(() => {
                $("iframe").hide();
            }, 1500);

            localStorage.setItem("stateAppType", "metamask");
        });

        await Promise.all(rowResolvers);
    } else {
        $(".disconnect-area").hide();
        $(".connect-area").show();
    }
}

async function onDisconnect() {
    userLoginData.address       = "";
    userLoginData.address_min   = "";
    userLoginData.balance       = "";

    if (isMetamask == true) {
        if (provider.close) {
            await provider.close();

            await provider.clearCachedProvider();
            provider = null;
        }
    }

    $(".disconnect-area").hide();
    $(".connect-area").show();

    if (isTorus == true) {
        await logoutTorus();
        setTimeout(() => {
            $("iframe").hide();
            $("#torusIframe").hide();
        }, 500);
    }
    localStorage.setItem("stateApp", "off");
}

async function changeNetwork(id) {
    try {
        await provider.request({
            method: 'wallet_switchEthereumChain',
            params: [{ chainId: dataInfoEnv.chainId }],
        }).then(async function(res) {
            swal.close();
            console.log(res);
        });
    } catch (switchError) {
        if (switchError.code === 4902) {
            try {
                await provider.request({
                    method: "wallet_addEthereumChain",
                    params: [
                        {
                            chainId: dataInfoEnv.chainId,
                            chainName: dataInfoEnv.redePadrao,
                            rpcUrls: [ dataInfoEnv.rpc],
                            nativeCurrency: {
                                name: dataInfoEnv.redePadrao,
                                symbol: 'ETH',
                                decimals: 18,
                            },
                            blockExplorerUrls: [dataInfoEnv.explorer],
                        },
                    ],
                }).then(async function (response) {
                    console.log(response);
                    swal.close();
                }).catch(function (error) {
                    console.log(error);
                    swal.close();
                });
            } catch (addError) {
                console.log(addError);
                swal.close();
            }
        }
    }
}

async function initTorus() {
    const torus = new Torus();
    window.torus = torus;

    await torus.init(
        {
            whitelabel: {
                theme: {
                    isDark: true,
                },
                defaultLanguage: "pt-BR",
                logoDark: "https://mint.blockchainrio.com.br/poap_assets/img/MobiUp-Logo-2-sem-fundo-white.png", // Dark logo for light background
                logoLight: "https://mint.blockchainrio.com.br/poap_assets/img/MobiUp-Logo-2-sem-fundo-white.png", // Light logo for dark background
            }
        });

    try {
        const user = await torus.getUserInfo();
        console.log("TORUS -> ", user);

        await initWeb3();
    } catch (error) {
        console.log("TORUS -> Didn't log in.");
        setTimeout(() => {
            $("iframe").hide();
        }, 1500);
    }
};

async function initWeb3() {
    const web3                  = new Web3(window.torus.provider);
    const address               = (await web3.eth.getAccounts())[0];
    const balance               = await web3.eth.getBalance(address);
    const ethBalance            = web3.utils.fromWei(balance, "ether");
    const humanFriendlyBalance  = parseFloat(ethBalance).toFixed(4);

    userLoginData.balance       = humanFriendlyBalance;
    userLoginData.address_min   = address.substr(0, 5) + '...' + address.substr(-4);
    userLoginData.address       = address;

    $(".carteira-destino-cc-pix-lb").val(userLoginData.address);
    $(".carteira-destino-cc-pix").val(userLoginData.address);

    $(".connected").html(userLoginData.address_min + ' <i class="bi-wallet me-1"></i>').show();
    $(".disconnect-area").show();
    $(".connect-area").hide();

    isMetamask = false;
    isTorus    = true;

    localStorage.setItem("stateAppType", "torus");
}

async function loginTorus() {
    $('#modalConnect').modal('hide');
    window.torus
        .login()
        .then(function () {
            return initWeb3();
        })
        .then(function () {
            return window.torus.getUserInfo();
        })
        .then(function (user) {
            console.log("TORUS -> Logged in as " , user);
        })
        .catch(function (err) {
            console.log("TORUS -> ", err.message);
        });
}

async function logoutTorus() {
    window.torus
        .logout()
        .then(function (res) {
            console.log("Logout torues", res);
        })
        .catch(function (err) {
            console.log("TORUS -> ", err.message);
        });
}

async function openWalletTorus() {
    try {
        const user = await torus.getUserInfo();
        const web3 = new Web3(window.torus.provider);
    } catch (error) {
        console.log("TORUS -> Didn't log in.");
    }

    const walletPopup = await torus.showWallet();
    console.log(walletPopup);
}

async function dataInfoNftsEnds() {
    const urlNft      = dataInfoEnv.infuraETH;
    const web3Nft     = new Web3(new Web3.providers.HttpProvider(urlNft));
    const contractNft = new web3Nft.eth.Contract(dataInfoEnv.abi, dataInfoEnv.contrato);

    const url               = dataInfoEnv.infuraETH;
    const web3Token         = new Web3(new Web3.providers.HttpProvider(url));
    const contractToken     = new web3Token.eth.Contract(dataInfoEnv.abiLeilao, dataInfoEnv.contratoLeilao);

    var arr = [];
    contractNft.getPastEvents('Transfer', {
        filter: {
            _from: '0x0000000000000000000000000000000000000000'
        },
        fromBlock: 0
    }).then(async (events) => {
        console.log(events);
        $(".row-nfts").html('');
        for (let event of events) {
            console.log(event);
            console.log(event.returnValues.tokenId);
            if (arr.indexOf(event.returnValues.tokenId) === -1) {
                arr.push(event.returnValues.tokenId);

                const endAuction = await contractToken.methods.auctionEnd(event.returnValues.tokenId).call();

                if (endAuction == true) {
                    const getWalletWinner = await contractToken.methods.getWalletWinner(parseInt(event.returnValues.tokenId)).call();
                    $(".row-nfts").append('<div class="col mb-3">\n' +
                        '                <div class="card h-100">\n' +
                        '                    <!-- Product image-->\n' +
                        '                    <img class="card-img-top" src="' + base + 'assets/img/mobiup.png" alt="..." />\n' +
                        '                    <!-- Product details-->\n' +
                        '                    <div class="card-body p-4">\n' +
                        '                        <div class="text-center">\n' +
                        '                            <!-- Product name-->\n' +
                        '                            <h5 class="fw-bolder">Token ' + event.returnValues.tokenId + '</h5>\n' +
                        '                            <!-- Product price-->\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <!-- Product actions-->\n' +
                        '                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">\n' +
                        '                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Leilão Finalizado</a></div>\n' +
                        '                        <div class="text-center">Wallet ganhadora <a href="' + dataInfoEnv.urlNetwork + '/token/' + dataInfoEnv.contrato + '?a=' + event.returnValues.tokenId + '">' + formatMinWallet(getWalletWinner) + '</a>');$("#end-auction-text-winner").html('Wallet ganhadora <a href="' + dataInfoEnv.urlNetwork + '/address/' + getWalletWinner + '">' + formatMinWallet(getWalletWinner) + '</a></div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>');
                } else {
                    $(".row-nfts").append('<div class="col mb-3">\n' +
                        '                <div class="card h-100">\n' +
                        '                    <!-- Product image-->\n' +
                        '                    <img class="card-img-top" src="' + base + 'assets/img/mobiup.png" alt="..." />\n' +
                        '                    <!-- Product details-->\n' +
                        '                    <div class="card-body p-4">\n' +
                        '                        <div class="text-center">\n' +
                        '                            <!-- Product name-->\n' +
                        '                            <h5 class="fw-bolder">Token ' + event.returnValues.tokenId + '</h5>\n' +
                        '                            <!-- Product price-->\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                    <!-- Product actions-->\n' +
                        '                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">\n' +
                        '                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" onclick="endAuction(' + event.returnValues.tokenId + ')">Encerrar</a></div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>');
                }
            }
        }
    }).catch(function (error) {
        console.log(error);
    });
}

async function endAuction(idToken) {
    var web3Teste = new Web3(new Web3.providers.HttpProvider(dataInfoEnv.infuraETH));
    const signer = web3Teste.eth.accounts.privateKeyToAccount('4dd5412b7044536761ec5c8b787a01bdeb5c2bba6d106d23e254a48eb98d9a0f');
    web3Teste.eth.accounts.wallet.add(signer);
    var contratoTesteNFT = dataInfoEnv.contratoLeilao;
    var abiMint = dataInfoEnv.abiLeilao;
    const contract = new web3Teste.eth.Contract(abiMint, contratoTesteNFT);

    const tx = await contract.methods.closesAuction(idToken);

    swal.fire({
        title: 'Um momento!',
        html: 'Processando encerramento do leilão...',
        allowOutsideClick: false,
        onBeforeOpen: () => {
            swal.showLoading();
        },
    });

    const receipt = await tx
        .send({
            from: signer.address,
            gas: await tx.estimateGas()
        })
        .once("transactionHash", (txhash) => {
            console.log(`Mining transaction ...`);
        });

    console.log(`Mined in block ${receipt.blockNumber}`);

    await sendNftsWinner(idToken);

    swal.fire('Tudo OK!', 'Encerramento efetuado com sucesso!', 'success');

    await dataInfoNftsEnds();
}

async function sendNftsWinner(idToken) {
    const url               = dataInfoEnv.infuraETH;
    const web3Token         = new Web3(new Web3.providers.HttpProvider(url));
    const contractToken     = new web3Token.eth.Contract(dataInfoEnv.abiLeilao, dataInfoEnv.contratoLeilao);
    const getWalletWinner   = await contractToken.methods.getWalletWinner(parseInt(idToken)).call();
    console.log("getWalletWinner", getWalletWinner);


    try {
        var web3Teste = new Web3(new Web3.providers.HttpProvider(dataInfoEnv.infuraETH));
        const signer = web3Teste.eth.accounts.privateKeyToAccount('4dd5412b7044536761ec5c8b787a01bdeb5c2bba6d106d23e254a48eb98d9a0f');
        web3Teste.eth.accounts.wallet.add(signer);
        var contratoTesteNFT = dataInfoEnv.contrato;
        var abiMint = dataInfoEnv.abi;
        const contract = new web3Teste.eth.Contract(abiMint, contratoTesteNFT);

        const tx = await contract.methods._transfer(String(dataInfoEnv.owner), String(getWalletWinner) , parseInt(idToken));

        const receipt = await tx
            .send({
                from: signer.address,
                gas: await tx.estimateGas()
            })
            .once("transactionHash", (txhash) => {
                console.log(`Mining transaction ...`);
            });

        console.log("Mined in block", receipt);
    } catch (e) {
        console.log("ERROR -> ", e);
    }
}

async function dataInfoNfts() {
    const urlNft      = dataInfoEnv.infuraETH;
    const web3Nft     = new Web3(new Web3.providers.HttpProvider(urlNft));
    const contractNft = new web3Nft.eth.Contract(dataInfoEnv.abi, dataInfoEnv.contrato);

    var arr = [];
    contractNft.getPastEvents('Transfer', {
        filter: {
            _from: '0x0000000000000000000000000000000000000000'
        },
        fromBlock: 0
    }).then((events) => {
        console.log(events);
        $(".row-nfts").html('');
        for (let event of events) {
            console.log(event);
            console.log(event.returnValues.tokenId);
            if (arr.indexOf(event.returnValues.tokenId) === -1) {
                arr.push(event.returnValues.tokenId);
                $(".row-nfts").append('<div class="col mb-5">\n' +
                    '                <div class="card h-100">\n' +
                    '                    <!-- Product image-->\n' +
                    '                    <img class="card-img-top" src="' + base + 'assets/img/mobiup.png" alt="..." />\n' +
                    '                    <!-- Product details-->\n' +
                    '                    <div class="card-body p-4">\n' +
                    '                        <div class="text-center">\n' +
                    '                            <!-- Product name-->\n' +
                    '                            <h5 class="fw-bolder">Token ' + event.returnValues.tokenId + '</h5>\n' +
                    '                            <!-- Product price-->\n' +
                    '                            R$ 40,00 - R$ 80,00\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                    <!-- Product actions-->\n' +
                    '                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">\n' +
                    '                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/lance/' +event.returnValues.tokenId + '">Lance</a></div>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>')
            }
        }
    }).catch(function (error) {
        console.log(error);
    });
}

async function dataInfoCollection() {
    const url               = dataInfoEnv.infuraETH;
    const web3Token         = new Web3(new Web3.providers.HttpProvider(url));
    const contractToken     = new web3Token.eth.Contract(dataInfoEnv.abiLeilao, dataInfoEnv.contratoLeilao);
    const getWalletWinner   = await contractToken.methods.getWalletWinner(parseInt($("#idToken").val())).call();
    const lastBid           = await contractToken.methods.getLastBid(parseInt($("#idToken").val())).call();
    const endAuction        = await contractToken.methods.auctionEnd(parseInt($("#idToken").val())).call();

    console.log("endAuction", endAuction);
    if (endAuction == true) {
        $("#btn-lance").hide();
        $("#end-auction-text").text('Leilão finalizado!');
        $("#end-auction-text-winner").html('Wallet ganhadora <a href="' + dataInfoEnv.urlNetwork + '/token/' + dataInfoEnv.contrato + '?a=' + $("#idToken").val() + '">' + formatMinWallet(getWalletWinner) + '</a>');$("#end-auction-text-winner").html('Wallet ganhadora <a href="' + dataInfoEnv.urlNetwork + '/address/' + getWalletWinner + '">' + formatMinWallet(getWalletWinner) + '</a>');
    }

    dataCollection.walletWinner = getWalletWinner;
    dataCollection.lastBid      = parseFloat(lastBid);

    buyUser.amount = parseInt(lastBid);

    $(".last-transaction").html('');
    var arrIdToken = [];
    contractToken.getPastEvents('BidAuction', {
        filter: {
            _from: '0x0000000000000000000000000000000000000000'
        },
        fromBlock: 0
    }).then((events) => {
        console.log(events);
        for (let event of events) {
            console.log(event);
            console.log(event.returnValues.tokenId);
            if (event.returnValues.tokenId == $("#idToken").val()) {
                $(".last-transaction").append('<tr>\n' +
                    '                        <th scope="row">' + event.returnValues.tokenId + '</th>\n' +
                    '                        <td>' + number_format(parseFloat(event.returnValues.amount), 2, ',', '.') + '</td>\n' +
                    '                        <td>' + formatMinWallet(event.returnValues.wallet) + '</td>\n' +
                    '                        <td><a href="' + dataInfoEnv.urlNetwork + '/tx/' + event.transactionHash + '">' + formatMinWallet(event.transactionHash) + '</a></td>\n' +
                    '                    </tr>');
            }
        }
    }).catch(function (error) {
        console.log(error);
    });

    console.log(dataCollection);
    console.log(buyUser);
    await viewInfoContract();
}

async function viewInfoContract() {
    $('.last-bid').html('Último lance R$ ' + number_format(dataCollection.lastBid, 2, ',', '.') + ' - <a href="' + dataInfoEnv.urlNetwork + '/address/' + userLoginData.address + '">' + formatMinWallet(dataCollection.walletWinner) + '</a>');
    $('.valorPix').text("R$ " + number_format(parseFloat(buyUser.amount) + 10, 2, ',', '.'));
}

function number_format(number, decimals, dec_point, thousands_point) {
    if (number == null || ! isFinite(number)) {
        throw new TypeError("number is not valid");
    }

    if (! decimals) {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }

    if (! dec_point) {
        dec_point = '.';
    }

    if (! thousands_point) {
        thousands_point = '';
    }

    number = parseFloat(number).toFixed(decimals);

    number = number.replace(".", dec_point);

    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);

    return number;
}

async function addTokenMetamask() {
    const tokenSymbol   = dataCollection.symbol;
    const tokenDecimals = 0;
    const tokenImage    = dataCollection.image;

    try {
        const wasAdded = await provider.request({
            method: 'wallet_watchAsset',
            params: {
                type: 'ERC20',
                options: {
                    address: dataInfoEnv.contrato,
                    symbol: tokenSymbol,
                    decimals: tokenDecimals,
                    image: tokenImage,
                },
            },
        }).then(function (success) {
            swal.close();
            console.log(success);
        });

        if (wasAdded) {
            window.ethereum.on('close', function (accounts) { })
        } else {
            console.log(wasAdded)
        }
    } catch (error) {
        console.log(error);
    }
}

async function lance() {
    if (userLoginData.address == '') {
        swal.fire('Ops', 'Você precisa estar conectado, clique no botão conectar.', 'error');
        return;
    }
    $('#modalPix').modal('show');
}

async function pay() {
    $('#modalPix').modal('hide');

    var web3Teste = new Web3(new Web3.providers.HttpProvider(dataInfoEnv.infuraETH));
    const signer = web3Teste.eth.accounts.privateKeyToAccount('4dd5412b7044536761ec5c8b787a01bdeb5c2bba6d106d23e254a48eb98d9a0f');
    web3Teste.eth.accounts.wallet.add(signer);
    var contratoTesteNFT = dataInfoEnv.contratoLeilao;
    var abiMint = dataInfoEnv.abiLeilao;
    const contract = new web3Teste.eth.Contract(abiMint, contratoTesteNFT);

    const tx = await contract.methods.mint(String(userLoginData.address), parseFloat(buyUser.amount) + 10, $('#idToken').val());

    if (userLoginData.address == '') {
        swal.fire('Ops', 'Você precisa estar conectado, clique no botão conectar.', 'error');
        return;
    }

    swal.fire({
        title: 'Um momento!',
        html: 'Processando seu lance...',
        allowOutsideClick: false,
        onBeforeOpen: () => {
            swal.showLoading();
        },
    });

    const receipt = await tx
    .send({
        from: signer.address,
        gas: await tx.estimateGas()
    })
    .once("transactionHash", (txhash) => {
        console.log(`Mining transaction ...`);
    });

    console.log(`Mined in block ${receipt.blockNumber}`);
    swal.close();

    await dataInfoCollection();
    swal.fire('Tudo OK!', 'Lance efetuado com sucesso!', 'success');
}

var formatMinWallet = function (address) {
    return address.substr(0,5) + '...' + address.substr(-6);
};

function fMasc(objeto, mascara) {
    obj = objeto;
    masc = mascara;
    setTimeout("fMascEx()",1)
}

function fMascEx() {
    obj.value = masc(obj.value);
}

function mCPF(cpf) {
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
}

$(document).ready(function () {
    init();
    initTorus();

    if (typeof web3 !== 'undefined') {
        console.log('web3 is enabled')
        if (web3.currentProvider.isMetaMask === true) {
            console.log('MetaMask is active');
        } else {
            console.log('MetaMask is not available');
        }
    } else {
        console.log('web3 is not found');
    }

    var stateApp = localStorage.getItem("stateApp");

    if (stateApp == null) {
        localStorage.setItem("stateApp", "off");
    } else {
        stateApp = localStorage.getItem("stateApp");
        if (stateApp == "on") {
            if (localStorage.getItem("stateAppType") == "metamask") {
                onConnect();
            }
        }
    }
});
