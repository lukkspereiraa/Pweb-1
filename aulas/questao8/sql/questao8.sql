CREATE database questao8;

use questao8;

create table Produto(
	ProdutoID int auto_increment primary key,
    Nome varchar(100) not null,
    Preco decimal(10,2) not null
);

INSERT INTO Produto (Nome, Preco) VALUES
('Camiseta', 49.90),
('Calça Jeans', 129.90),
('Meia', 9.99),
('Tônicos', 299.90),
('Tênis Casual', 179.90),
('Camisa Social', 89.90),
('Shorts Esportivo', 59.90),
('Chinelo', 29.90),
('Perfume Masculino', 249.90),
('Relógio Analógico', 199.00),
('Cinto de Couro', 39.90),
('Touca de Lã', 19.99),
('Óculos de Grau', 159.90),
('Bolsa Feminina', 119.90);

