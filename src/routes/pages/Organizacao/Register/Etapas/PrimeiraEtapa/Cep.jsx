import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet, TextInput } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function SobreNome({ navigation }) {
  const [cep, setCep] = useState('');

  const handleCepChange = (text) => {
    // Remove caracteres não numéricos
    const formattedCep = text.replace(/[^0-9]/g, '');

    // Adiciona hífens no formato de CEP
    if (formattedCep.length >= 5) {
      setCep(
        formattedCep.substring(0, 5) + '-' + formattedCep.substring(5, formattedCep.length)
      );
    } else {
      setCep(formattedCep);
    }
  };

  return (
    <View style={styles.container}>
      <View style={styles.container}>
        <Animado.Text style={styles.title} animation="zoomIn" duration={800}>Qual é o CEP da sua organização?</Animado.Text>
        <TextInput
          style={styles.input}
          placeholder="Digite apenas números"
          value={cep}
          onChangeText={handleCepChange}
          keyboardType="numeric"
          maxLength={10} // Agora o maxLength é 10, pois o CEP tem 8 dígitos + 1 hífen
        />
        <View style={styles.buttonColumn}>
          <TouchableOpacity style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('Endereco')}>
              Prosseguir
            </Text>
          </TouchableOpacity>
        </View>
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
  description: {
    marginBottom: 20,
    textAlign:"left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '##FABDC1',
    textAlign: 'center',
  },
  button1: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
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
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: '100%',
    height: 50,
  },

  });


