import React from 'react';
import { View, Image, StyleSheet, Text, Modal, Pressable } from 'react-native';

import NavBar from '../../Components/NavBar/navbar';

export default function modalConfigPerfil() {
  return (
    <View style={styles.container}>
      <Modal animationType='slide'>
        <View style={styles.topContainer}>
            <Pressable>
                <Image
                    style={styles.back}
                    source={require('../../../assets/img/User/back.png')}
                />
            </Pressable>
        </View>
        <View style={styles.bottomContainer}>
          <Text style={styles.title}>Configurações</Text>
        </View>
        <View style={[styles.bottomContainer, styles.subTitleContainer]}>
          <Text style={styles.subTitle}>Conta</Text>
        </View>
        <View style={styles.contentContainer}>
          <View style={styles.column}>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconDadosPessoais.png')}
                />
                <Text style={styles.itemText}>Dados pessoais</Text>
              </View>
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconSeguindo.png')}
                />
                <Text style={styles.itemText}>Seguindo</Text>
              </View>
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconNotificacoes.png')}
                />
                <Text style={styles.itemText}>Notificações</Text>
              </View>
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconRegistroInteresse.png')}
                />
                <Text style={styles.itemText}>Registro de Interesse</Text>
              </View>
            </Pressable>
          </View>
        </View>
        <View style={[styles.bottomContainer, styles.subTitleContainer]}>
          <Text style={styles.subTitle}>Suporte</Text>
          <View style={styles.contentContainer}>
            <View style={styles.column}>
              <Pressable style={styles.item}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconFeedback.png')}
                  />
                  <Text style={styles.itemText}>Feedback</Text>
                </View>
              </Pressable>
              <Pressable style={styles.item}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconContato.png')}
                  />
                  <Text style={styles.itemText}>Contato</Text>
                </View>
              </Pressable>
              <Pressable style={styles.item}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconSobre.png')}
                  />
                  <Text style={styles.itemText}>Sobre</Text>
                </View>
              </Pressable>
            </View>
          </View>
        </View>
        <NavBar/>
      </Modal>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  topContainer: {
    flexDirection: 'row',
    justifyContent: 'flex-start',
    alignItems: 'center',
    marginTop: 10,
    paddingHorizontal: 5,
  },
  bottomContainer: {
    justifyContent: 'center',
  },
  subTitleContainer: {
    marginVertical: 10, // Adiciona margem entre os subtítulos
  },
  back: {
    height: 35,
    width: 35,
  },
  title: {
    fontSize: 25,
    color: '#a6a6a6',
    textAlign: 'center',
  },
  subTitle: {
    fontSize: 20,
    color: '#a6a6a6',
    paddingHorizontal: 30,
  },
  contentContainer: {
    flexDirection: 'row',
    justifyContent: 'center',
    alignItems: 'flex-start',
  },
  column: {
    justifyContent: 'flex-start',
    alignItems: 'center',
    marginHorizontal: 20,
  },
  item: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 18, // Adiciona margem entre os itens
  },
  buttonContent: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  icon: {
    width: 40,
    height: 40,
    marginRight: 30,
  },
  itemText: {
    fontSize: 20,
    color: '#a6a6a6',
  },
});
