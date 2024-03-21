import React, { useState } from 'react';
import { View, Image, StyleSheet, Text, Modal, Pressable } from 'react-native';
import Perfil from '../../routes/pages/Usuario/Perfil'

export default function modalConfigPerfil() {
  const [modalConfigVisu, setModalConfigVisu] = useState(true);

  function configPerfilModal() {
    setModalConfigVisu(false);
    <Perfil configPerfilModal/>
  }

  return (
    <View style={styles.container}>
      <Modal 
        animationType='slide'
        visible={modalConfigVisu}
        onRequestClose={() => {
          Alert.alert('Modal has been closed.');
          setModalVisible(!modalConfigVisu);
      }}>
        {/* Imagens dos cantos */}
      <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', marginTop: 250}}>
              <Image
                style={{ height: 105, width: 43 }}
                source={require('../../../assets/img/ConfigPerfil/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'sticky', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 46 }}
                source={require('../../../assets/img/ConfigPerfil/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end', marginBottom: 350 }}>
              <Image
                style={{ height: 90, width: 35 }}
                source={require('../../../assets/img/ConfigPerfil/meioDIreito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 90, width: 111 }}
                source={require('../../../assets/img/Home/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
        <View style={styles.topContainer}>
            <Pressable onPress={configPerfilModal}>
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
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconSeguindo.png')}
                />
                <Text style={styles.itemText}>Seguindo</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconNotificacoes.png')}
                />
                <Text style={styles.itemText}>Notificações</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconRegistroInteresse.png')}
                />
                <Text style={styles.itemText}>Registro de Interesse</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
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
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
              <Pressable style={styles.item}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconContato.png')}
                  />
                  <Text style={styles.itemText}>Contato</Text>
                </View>
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
              <Pressable style={styles.item}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconSobre.png')}
                  />
                  <Text style={styles.itemText}>Sobre</Text>
                </View>
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
            </View>
          </View>
        </View>
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
    fontSize: 30,
    color: '#a6a6a6',
    textAlign: 'center',
    fontWeight: 'bold',
  },
  subTitle: {
    fontSize: 25,
    color: '#a6a6a6',
    paddingHorizontal: 35,
    fontWeight: 'bold',
  },
  contentContainer: {
    flexDirection: 'row',
    justifyContent: 'center',
    alignItems: 'center',
  },
  column: {
    justifyContent: 'flex-start',
    alignItems: 'flex-start',
    marginHorizontal: 30,
    width: '80%'
  },
  item: {
    flex: 1,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
    marginBottom: 18, // Adiciona margem entre os itens
    width: '95%',
  },
  buttonContent: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  icon: {
    width: 40,
    height: 40,
    marginRight: 10,
  },
  iconSeta: {
    width: 12,
    height: 20,
    alignSelf:"center"
  },
  itemText: {
    fontSize: 22,
    color: '#a6a6a6',
  },
});
