-- DATI DA IMPORTARE NEL DATABASE

INSERT INTO `trains` (`id`, `train_company`, `train_code`, `departure_railway`, `destination_railway`, `departure_time`, `arrival_time`, `n_couches`, `on_time`, `deleted`) VALUES
(1, 'FlixTrain', 'FT5296', 'Roma Termini', 'Milano Centrale', '07:00', '13:15', 5, 1, 0),
(2, 'RyanTrain', 'RY3679', 'Torino Porta Nuova', 'Genova', '07:30', '09:40', 4, 0, 0),
(3, 'ItaTrain', 'IT9423', 'Bologna Centrale', 'Roma Termini', '07:30', '10:30', 6, 1, 1),
(4, 'FlixTrain', 'FT5297', 'Milano Centrale', 'Roma Termini', '14:00', '20:15', 5, 1, 0),
(5, 'RyanTrain', 'RY3680', 'Genova', 'Torino Porta Nuova', '11:00', '13:00', 4, 1, 0),
(6, 'ItaTrain', 'IT9424', 'Roma Termini', 'Bologna Centrale', '11:30', '15:00', 6, 1, 0);
