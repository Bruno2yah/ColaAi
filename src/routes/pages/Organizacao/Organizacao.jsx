import React, { useState } from 'react';
import { View, Text, TouchableOpacity, StyleSheet } from 'react-native';

export default function Organizacao({ navigation }) {
  const [showLoginForm, setShowLoginForm] = useState(false);
  const [selectedForm, setSelectedForm] = useState(0);

  const handleButtonPress = (buttonNumber) => {
    setShowLoginForm(true);

    if (buttonNumber === 1) {
      setSelectedForm(1);
      navigation.navigate('LoginEmail');
    } else if (buttonNumber === 2) {
      setSelectedForm(2);
      navigation.navigate('LoginTelefone');
    } else if (buttonNumber === 3) {
      setSelectedForm(3);
      navigation.navigate('Register');

    } else {
      setShowLoginForm(false);
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Bem vindo(a)!</Text>
      <Text style={styles.description}>
        Entre com a sua conta e desfrute de todos os benefícios do Cola Aí.
      </Text>
      <View style={styles.buttonContainer}>
        <View style={styles.buttonColumn}>
          <TouchableOpacity style={styles.button2} onPress={() => handleButtonPress(0)}>
            <Text style={styles.buttonText}>Entrar com google</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.button1} onPress={() => handleButtonPress(1)}>
            <Text style={styles.buttonText}>Entrar com e-mail</Text>
          </TouchableOpacity>
          <TouchableOpacity style={styles.button2} onPress={() => handleButtonPress(2)}>
            <Text style={styles.buttonText}>Entrar com telefone</Text>
          </TouchableOpacity>
          <TouchableOpacity onPress={() => handleButtonPress(3)}>
            <Text style={styles.linkText}>Cadastre-se</Text>
          </TouchableOpacity>
        </View>
      </View>
    </View>
  );
}

  const buttonStyle = {
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  };

  const styles = StyleSheet.create({
    container: {
      flex: 1,
      justifyContent: "center",
      alignItems: "center",
      backgroundColor: "white",
    },
    title: {
      fontSize: 24,
      fontWeight: "bold",
      marginBottom: 10,
    },
    description: {
      fontSize: 16,
      textAlign: "center",
      marginBottom: 20,
    },
    buttonContainer: {
      width: "80%",
    },
    buttonColumn: {
      flexDirection: "column",
      alignItems: "center",
    },
    buttonText: {
      fontSize: 22,
      textAlign: "center",
    },
    button1: {
      ...buttonStyle,
      backgroundColor: "#6D9EAF",
    },
    button2: {
      ...buttonStyle,
      backgroundColor: "#E6AEB2",
    },
    inputContainer: {
      width: '90%',
      marginTop: 20,
    },
    label: {
      color: '#666',
      marginTop: 10,
    },
    input: {
      textAlign: 'center',
      borderBottomWidth: 1,
      borderBottomColor: '#aaa',
      fontSize: 16,
      marginBottom: 10,
    },
    linkText: {
      fontSize: 16,
      color: 'blue',
      marginTop: 10,
    },
  });