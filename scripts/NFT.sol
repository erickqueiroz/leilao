// SPDX-License-Identifier: MIT

pragma solidity >=0.7.0 <0.9.0;
pragma abicoder v2;

import "@openzeppelin/contracts/utils/introspection/IERC165.sol";
import "@openzeppelin/contracts/utils/Address.sol";
import "@openzeppelin/contracts/access/Ownable.sol";
import "@openzeppelin/contracts/token/ERC721/extensions/ERC721URIStorage.sol";
import "@openzeppelin/contracts/utils/Counters.sol";
import "ERC721A.sol";
import "https://github.com/ProjectOpenSea/operator-filter-registry/blob/main/src/DefaultOperatorFilterer.sol";

contract NFT is DefaultOperatorFilterer, ERC721A, Ownable {
    using Address for address;
    using Strings for uint256;

    mapping(address => bool) public whitelistClaimed;

    uint256 private maxSupply = 1000;
    address _contractOwner;
    uint256 private _royalties = 10;
    uint256 private _royaltiesImob = 20;
    address private wMobiup = 0x2919771f951fd264445d4D4c682EE5D8326B93ec;
    address private wImob = 0x2919771f951fd264445d4D4c682EE5D8326B93ec;
    uint256 private _nftEtherValue = 0 ether;
    string public _contractUri = "https://ipfs.io/ipfs/QmY3K6Vf6V5ACQ8M5KEdKCmz8xbUYonyMCZT6tiykii8Rj/contractURI.json";
    string public baseURI;

    constructor() ERC721A("Hackathon Imoveis", "HMOV") {
        setBaseURI("https://ipfs.io/ipfs/QmY3K6Vf6V5ACQ8M5KEdKCmz8xbUYonyMCZT6tiykii8Rj/nft.json");
        _contractOwner = msg.sender;
        mint(msg.sender, 10);
    }

    function _baseURI() internal view virtual override returns (string memory) {
        return baseURI;
    }

    function setBaseURI(string memory _newBaseURI) public onlyOwner {
        baseURI = _newBaseURI;
    }

    function withdraw() public payable onlyOwner {
        (bool os, ) = payable(owner()).call{value: address(this).balance}("");
        require(os);
    }

    function setNftEtherValue(uint256 nftEtherValue) public onlyOwner {
        _nftEtherValue = nftEtherValue;
    }

    function getBaseURI() public view returns (string memory) {
        return baseURI;
    }

    function mint(address endUser, uint256 amount) public payable {
        uint256 supply = totalSupply();
        _safeMint(endUser, amount);
        uint256 newIdToken = supply + amount;
        tokenURI(newIdToken);
        split(msg.value);
    }

    function contractURI() external view returns (string memory) {
        return _contractUri;
    }

    function tokenURI(uint256 tokenId)
        public
        view
        virtual
        returns (string memory)
    {
        require(
        _exists(tokenId),
        "ERC721Metadata: URI query for nonexistent token"
        );

        string memory currentBaseURI = _baseURI();
        return bytes(currentBaseURI).length > 0
            ? string(abi.encodePacked(currentBaseURI))
            : "";
    }

    function split(uint256 _mintAmount) public payable {
        uint256 _nftEtherValueTemp = _nftEtherValue;
        require(msg.value >= (_nftEtherValueTemp * _mintAmount), "Valor da mintagem diferente do valor definido no contrato");

        uint ownerAmount = msg.value;

        uint256 _splitPercentageM = _royalties;
        uint256 amountM = msg.value * _splitPercentageM / 100;


        uint256 amountImob = msg.value * _royaltiesImob / 100;

        payable(wMobiup).transfer(amountM);
        payable(wImob).transfer(amountImob);

        ownerAmount = msg.value - amountM - amountImob;
        payable(_contractOwner).transfer(ownerAmount);
    }

    function setApprovalForAll(address operator, bool approved) public override onlyAllowedOperatorApproval(operator) {
        super.setApprovalForAll(operator, approved);
    }

    function approve(address operator, uint256 tokenId) public override onlyAllowedOperatorApproval(operator) {
        approve(operator, tokenId);
    }

    function transferFrom(address from, address to, uint256 tokenId) public override onlyAllowedOperator(from) {
        transferFrom(from, to, tokenId);
    }

    function safeTransferFrom(address from, address to, uint256 tokenId) public override onlyAllowedOperator(from) {
        safeTransferFrom(from, to, tokenId);
    }

    function safeTransferFrom(address from, address to, uint256 tokenId, bytes memory data)
        public
        override
        onlyAllowedOperator(from)
    {
        safeTransferFrom(from, to, tokenId, data);
    }
}
