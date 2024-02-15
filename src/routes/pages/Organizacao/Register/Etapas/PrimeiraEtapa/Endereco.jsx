import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function SobreNome({ navigation }) {
  const [endereco, setEndereco] = useState('');
  const [numero, setNumero] = useState('');

  const handleEnderecoChange = (text) => {
    setEndereco(text);
  };

  const handleNumeroChange = (text) => {
    // Remove caracteres não numéricos
    const formattedNumero = text.replace(/[^0-9]/g, '');
    setNumero(formattedNumero);
  };

  return (
    <View style={styles.container}>
      <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o endereço da sua organização?</Animado.Text>
      
      <View style={styles.inputContainer}>
        <TextInput
          style={styles.input}
          placeholder="Digite o endereço"
          value={endereco}
          onChangeText={handleEnderecoChange}
        />
        
        <TextInput
          style={styles.input2}
          placeholder="N°"
          value={numero}
          onChangeText={handleNumeroChange}
          keyboardType="numeric"
          maxLength={5}
        />
      </View>
      
      <View style={styles.buttonColumn}>
        <TouchableOpacity style={styles.button2}>
          <Text style={styles.buttonText2} onPress={() => navigation.navigate('Email')}>
            Prosseguir
          </Text>
        </TouchableOpacity>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    height: '100%',
    width: '100%',
    padding: 10,
  },
  title: {
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",
  },
  inputContainer: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    width: '100%',
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '75%', // Ajuste a largura conforme necessário
    height: 50,
  },
  input2: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '20%', // Ajuste a largura conforme necessário
    height: 50,
  },
  buttonText2: {
    fontSize: 22,
    color: "#6D9EAF",
    textAlign: "center",
  },
  button2: {
    backgroundColor: "#FABDC1",
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width: '100%',
    height: 50,
    alignItems: "flex-end",
  },
});